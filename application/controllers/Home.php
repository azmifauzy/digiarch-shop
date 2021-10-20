<?php
defined('BASEPATH') OR exit('No direct script access allowed on this basepath');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function signUp()
	{
// 		FUNCTION REGISTER / SIGN UP ACCOUNT
		
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('email', 'Email Address', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('password2', 'Confirmation Password', 'required|matches[password]');
		if($this->form_validation->run() == false ) {
			redirect(base_url(''));
		} else {
			
			if($this->User_model->signUp() > 0) {
				echo "<script> alert('Sign Up Success!'); document.location.href = ''; </script>";
			}

		}
	}
// 	this is function signIn 
	public function signIn()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		if($this->form_validation->run() == false ) {
			redirect(base_url(''));
		} else {
			
			if($this->User_model->signIn() > 0) {
				echo "<script> alert('Sign In Success!'); document.location.href = ''; </script>";
			} else {
				echo "<script> alert('Sign In Failed!'); document.location.href = ''; </script>";
			}
		}
	}

// 	this is function signOut 
	public function signOut()
	{
		if($this->session->userdata('id'))
		{
			session_destroy();
			session_unset();
			redirect(base_url(''));
		} else {
			redirect(base_url(''));
		}
	}
}
