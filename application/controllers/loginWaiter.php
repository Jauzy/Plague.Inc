<?php

class LoginWaiter extends CI_Controller{
	public function index(){
		$data['judul'] = 'Plague.Inc - Login Waiter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/login_waiter');
		$this->load->view('templates/footer');
    }
}