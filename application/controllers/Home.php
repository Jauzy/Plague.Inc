<?php

class Home extends CI_Controller
{
	public function index()
	{
		ini_set('max_execution_time', 0);
		ini_set('memory_limit', '2048M');
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
}
