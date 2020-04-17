<?php

class About extends CI_Controller{
	public function index(){
		$data['judul'] = 'Login Dokter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/about');
		$this->load->view('templates/footer');
    }
}