<?php

class RegisterDokter extends CI_Controller{
	public function index(){
		$data['judul'] = 'Plague.Inc - Register Dokter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/register_dokter');
		$this->load->view('templates/footer');
    }
}