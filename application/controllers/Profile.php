<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index($id)
	{
// 		IF $ID NOT EMPTY CONTINUE
		if( !empty($id))
		{
			if( $result = $this->db->get_where('users', ["id" => $id])->row_array() )
			{
				$this->form_validation->set_rules('title', 'Title of Product', 'required');
				$this->form_validation->set_rules('price', 'Price of Product', 'required');
				$this->form_validation->set_rules('desc', 'Description', 'required');
				if( $this->form_validation->run() == false )
				{
					if(isset($_POST['topup']))
					{
						if( $this->Transaction_model->topup($_POST['balance']) > 0)
						{
							$this->session->set_flashdata('topup', '<div class="alert alert-success" role="alert"><b>Top Up Processing...</b></div>');
							redirect(base_url('profile/' . $this->session->userdata('id')));
						}
					}

					$data['user'] = $result;
					$data['items'] = $this->Item_model->readMine($id);
					$data['transactions'] = $this->Transaction_model->readMine();
					$this->load->view('dashboard/templates/header', $data);
					$this->load->view('dashboard/profile', $data);
					$this->load->view('dashboard/templates/footer');
				} else {
					if($this->Item_model->create() > 0) {
						$this->session->set_flashdata('add', '<div class="alert alert-success" role="alert"><b>Added Item Success.</b></div>');
						redirect(base_url('profile/' . $this->session->userdata('id')));
					}
				}
			} else {
				redirect(base_url('dashboard'));
			}
		} else {
			redirect(base_url('dashboard'));
		}
	}

	public function delete($id)
	{
		if( $this->Item_model->readIt($id) > 0 )
		{
			$result = $this->Item_model->readIt($id);
			if( $result['seller_id'] == $this->session->userdata('id'))
			{
				if($this->Item_model->delete($id) > 0) {
					$this->session->set_flashdata('delete', '<div class="alert alert-success" role="alert"><b>Delete Item Success.</b></div>');
					redirect(base_url('profile/' . $this->session->userdata('id')));
				}
			} else {
				redirect(base_url('profile/') . $this->session->userdata('id'));
			}
		} else {
			redirect(base_url('profile/') . $this->session->userdata('id'));
		}
	}

}
?>
