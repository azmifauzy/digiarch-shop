<?php  


class Transaction_model extends CI_Model {

	public function read()
	{
		return $this->db->query("SELECT * FROM transactions")->result_array();
	}

	public function readMine()
	{
		$id = $this->session->userdata('id');
		$query = "SELECT * FROM transactions WHERE seller_id = '$id' OR buyer_id = '$id'";
		return $this->db->query($query)->result_array();
	}

	// ============================ //

	public function topup($balance)
	{
		$balance = (int) $balance;
		$data = 
		[	
			"id" => "",
			"buyer_id" => $this->session->userdata('id'),
			"buyer_name" => $this->session->userdata('name'),
			"balance" => $balance,
			"process" => "Not Yet"
		];

		$this->db->insert('topup', $data);
		return 1;
	}

	public function readTopup()
	{
		return $this->db->get('topup')->result_array();
	}

	public function submitTopup()
	{

		$User = $this->db->get_where('users', ["id" => $this->input->post('buyer_id')])->row_array();

		$newBalance = $User['balance'] + $this->input->post('balance');
		$this->db->where('id', $this->input->post('buyer_id'));
		$this->db->update('users', ["balance" => $newBalance]);

		return 1;
	}
}
?>