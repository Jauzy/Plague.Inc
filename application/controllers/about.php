<?php

class About extends CI_Controller{
	public function index(){
		$data['judul'] = 'Plague.Inc - About Us';
		$this->load->view('templates/header', $data);
		$this->load->view('container/about');
		$this->load->view('templates/footer');
    }
}