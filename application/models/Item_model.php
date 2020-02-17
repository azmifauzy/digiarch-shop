<?php  


class Item_model extends CI_Model {

	public function create()
	{

		$image = $_FILES["img"]["name"];
		if($image) {
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = 5000;
			$config['upload_path'] = './assets/img/db_img/item_img/';

			$this->load->library('upload', $config);
			$this->upload->do_upload('img');
		}

		$data = 
		[
			"id" => "",
			"item_seller" => $this->session->userdata('name'),
			"seller_id" => $this->session->userdata('id'),
			"item_title" => $this->input->post('title'),
			"item_price" => $this->input->post('price'),
			"item_desc" => $this->input->post('desc'),
			"item_img" => $image,
			"item_uploaded" => time()
		];

		$this->db->insert('items', $data);
		return 1;
	}

	public function read()
	{
		return $this->db->query("SELECT * FROM items")->result_array();
	}

	public function readIt($id)
	{
		return $this->db->get_where('items', ["id" => $id])->row_array();
	}
	public function readMine($id)
	{
		return $this->db->get_where('items', ["seller_id" => $id])->result_array();
	}

	public function delete($id)
	{
		$id = (int) $id;
		$result = $this->db->get_where('items', ["id" => $id])->row_array();

		unlink('assets/img/db_img/item_img/' . $result['item_img']);

		if($result) {
			$this->db->delete('items', ["id" => $id]);
			return 1;
			die;
		} else {
			redirect(base_url('dashboard/items'));
		}
	}

	public function checkout($id)
	{
		$data_item = $this->db->get_where('items', ["id" => $id])->row_array();
		$data_user = $this->db->get_where('users', ["id" => $this->session->userdata('id')])->row_array();


		if( $data_user["balance"] < $data_item["item_price"] ) 
		{
			$this->session->set_flashdata('checkout', '<div class="alert alert-danger" role="alert"><b>Checkout Failed! Balance not enough. <a href="">Top Up!</a></b></div>');
			redirect(base_url('dashboard/detail/' . $id));
		}

		$newBalance = $data_user["balance"] - $data_item["item_price"];
		$this->db->where("id", $data_user["id"]);
		$this->db->update("users", ["balance" => $newBalance]);

		$data = 
		[
			"id" => "",
			"buyer_id" => $this->session->userdata('id'),
			"buyer_name" => $this->session->userdata('name'),
			"item_id" => $data_item['id'],
			"item_seller" => $data_item['item_seller'],
			"seller_id" => $data_item['seller_id'],
			"item_title" => $data_item['item_title'],
			"item_price" => $data_item['item_price'],
			"date" => time()
		];

		$this->db->insert('transactions', $data);



		return 1;
	}
}

?>