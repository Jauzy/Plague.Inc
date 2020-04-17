<?php

class RegisterWaiter extends CI_Controller{
	public function index(){
		$data['judul'] = 'Register Waiter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/register_waiter');
		$this->load->view('templates/footer');
    }
}