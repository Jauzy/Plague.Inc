<?php

class Home extends CI_Controller
{
	public function index()
	{
		ini_set('max_execution_time', 0);
		ini_set('memory_limit', '2048M');
		$data['judul'] = 'Plague.Inc - Home';
		$this->load->view('templates/header', $data);
		$this->load->view('container/home');
		$this->load->view('templates/footer');
	}
}
