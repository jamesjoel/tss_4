<?php

class Home extends CI_Controller{
	function __construct()
	{
		parent :: __construct();
		$this->load->helper('url');
		
	}

	function index()
	{

		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	function login()
	{

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	function signup()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules('username', 'Username', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('re_pass', 'Re-Password', 'required|matches[pass]');
		$this->form_validation->set_rules('add', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[10]');


		if($this->form_validation->run()==false)
		{
			$this->load->view('header');
			$this->load->view('signup');
			$this->load->view('footer');
		}
		else
		{
			//$_POST
			$data['full_name']=$this->input->post('full_name');
			$data['username']=$this->input->post('username');
			$data['password']=$this->input->post('pass');
			$data['address']=$this->input->post('add');
			$data['gender']=$this->input->post('gender');
			$data['city']=$this->input->post('city');
			$data['contact']=$this->input->post('contact');
			$this->load->model('user');

			$this->user->insert($data);
			redirect("home/login");
		}

		
	}
}

?>
