<?php

class LoginDokter extends CI_Controller{
	public function index(){
		$data['judul'] = 'Plague.Inc - Login Dokter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/login_dokter');
		$this->load->view('templates/footer');
    }
}