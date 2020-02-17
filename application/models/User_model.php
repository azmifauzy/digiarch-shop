<?php  



class User_model extends CI_Model {


	public function signUp() {
		$data = 
		[	"id" => "",
			"name" => $this->input->post('name'),
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
			"created" => time(),
			"role" => "member",
			"img" => "default.png"
		];

		$this->db->insert('users', $data);
		return 1;
	}


	public function signIn() {
		$data = 
		[
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password')
		];
		$result = $this->db->get_where('users', $data)->row_array();
		if($result) {
			$this->session->set_userdata($result);
			return 1;
		} else {
			return 0;
		}
	}

	public function read()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}

	public function delete($id)
	{
		$id = (int) $id;
		$result = $this->db->get_where('users', ["id" => $id])->row_array();

		if($result['img'] !== "default.png") {
			unlink('assets/img/db_img/user_img/' . $result['img']);
		}


		if($result) {
			$this->db->delete('users', ["id" => $id]);
			return 1;
			die;
		} else {
			redirect(base_url('dashboard/users'));
		}
	}
	public function readIt($id)
	{
		return $this->db->get_where('users', ["id" => $id])->row_array();
	}


}



?>