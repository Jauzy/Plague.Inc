<?php

class DashboardDokter extends CI_Controller{
	public function index(){
		$data['judul'] = 'Login Dokter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/dashboard_dokter');
		$this->load->view('templates/footer');
    }
}