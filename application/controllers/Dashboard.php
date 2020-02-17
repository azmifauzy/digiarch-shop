<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() 
	{
		$data['items'] = $this->Item_model->read();
		$data["user"] = $this->User_model->readIt($this->session->userdata('id'));
		$this->load->view('dashboard/templates/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('dashboard/templates/footer');
	}

	public function items($url = "", $id = "")
	{

		if( $this->session->userdata('role') === "admin" )
		{
			if($url === "delete") {
				if($id !== "") {

					if($this->Item_model->delete($id) > 0) {
						$this->session->set_flashdata('delete', '<div class="alert alert-success" role="alert"><b>Delete Item Success.</b></div>');
						redirect(base_url('dashboard/items'));
					}
				} else {
					redirect(base_url('dashboard/items'));
				}


			} else {
				$this->form_validation->set_rules('title', 'Title of Product', 'required');
				$this->form_validation->set_rules('price', 'Price of Product', 'required');
				$this->form_validation->set_rules('desc', 'Description', 'required');
				if( $this->form_validation->run() == false ) {

					$data['items'] = $this->Item_model->read();
					$data["user"] = $this->User_model->readIt($this->session->userdata('id'));
					$this->load->view('dashboard/templates/header', $data);
					$this->load->view('dashboard/admin/items', $data);
					$this->load->view('dashboard/templates/footer');
				} else {
					if($this->Item_model->create() > 0) {
						$this->session->set_flashdata('add', '<div class="alert alert-success" role="alert"><b>Added Item Success.</b></div>');
						redirect(base_url('dashboard/items'));
					}
				}
			}
		} else {
			redirect(base_url('dashboard'));
		}

	}
	public function users($url = "", $id = "")
	{
		if($this->session->userdata('role') === "admin")
		{
			if($url === "delete") {
				if($id !== "") {

					if($this->User_model->delete($id) > 0) {
						$this->session->set_flashdata('delete', '<div class="alert alert-success" role="alert"><b>Delete User Success.</b></div>');
						redirect(base_url('dashboard/users'));
					}
				} else {
					redirect(base_url('dashboard/users'));
				}


			} else {
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('email', 'Email Addresses', 'required|is_unique[users.email]');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('password2', 'Confirmation Password', 'required');
				if( $this->form_validation->run() == false ) {

					$data['users'] = $this->User_model->read();
					$data["user"] = $this->User_model->readIt($this->session->userdata('id'));
					$this->load->view('dashboard/templates/header', $data);
					$this->load->view('dashboard/admin/users', $data);
					$this->load->view('dashboard/templates/footer');
				} else {
					if($this->User_model->signUp() > 0) {
						$this->session->set_flashdata('add', '<div class="alert alert-success" role="alert"><b>Added User Success.</b></div>');
						redirect(base_url('dashboard/users'));
					}
				}
			}
		} else {
			redirect(base_url('dashboard'));
		}
	}

	public function transactions()
	{
		$data["user"] = $this->User_model->readIt($this->session->userdata('id'));
		$data["transactions"] = $this->Transaction_model->read();
		$this->load->view('dashboard/templates/header', $data);
		$this->load->view('dashboard/admin/transactions', $data);
		$this->load->view('dashboard/templates/footer');
	}
	public function topup()
	{

		$this->form_validation->set_rules('buyer_id', 'Buyer Id', 'required');
		$this->form_validation->set_rules('balance', 'Balance', 'required');
		if($this->form_validation->run() == false )
		{
			$data["user"] = $this->User_model->readIt($this->session->userdata('id'));
			$data['topreq'] = $this->Transaction_model->readTopup();
			$this->load->view('dashboard/templates/header', $data);
			$this->load->view('dashboard/admin/topup', $data);
			$this->load->view('dashboard/templates/footer');
		} else {
			if($this->Transaction_model->submitTopup() > 0)
			{
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('topup', ["process" => "DONE"]);
				redirect(base_url('dashboard/topup'));
			}
		}
	}

	public function detail($id)
	{
		if(isset($id))
		{
			if( $this->Item_model->readIt($id) > 0 )
			{
				$data['data_item'] = $this->Item_model->readIt($id);
				$data["user"] = $this->User_model->readIt($this->session->userdata('id'));
				$this->load->view('dashboard/templates/header', $data);
				$this->load->view('dashboard/detail', $data);
				$this->load->view('dashboard/templates/footer');

			} else {
				redirect(base_url('dashboard'));
			}

		} else {
			redirect(base_url('dashboard'));
		}
	}

	public function checkout($id)
	{
		if(isset($id))
		{
			if( $this->Item_model->readIt($id) > 0 )
			{
				if( $this->Item_model->checkout($id) > 0 )
				{
					$this->session->set_flashdata('checkout', '<div class="alert alert-success" role="alert"><b>Checkout Success. <a href=""> See Order </a></b></div>');
					redirect(base_url('dashboard/detail/' . $id));
				}

			} else {
				redirect(base_url('dashboard'));
			}


		} else {
			redirect(base_url('dashboard'));
		}
	}
}