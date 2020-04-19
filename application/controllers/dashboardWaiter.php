<?php

class DashboardWaiter extends CI_Controller{
	public function index(){
		$data['judul'] = 'Plague.Inc - Dashboard Waiter';
		$this->load->view('templates/header', $data);
		$this->load->view('container/dashboard_waiter');
		$this->load->view('templates/footer');
    }
}