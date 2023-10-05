<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		cek_belum_logi();
	}

	public function index()
	{
		$data['judul'] = 'Admin | Dashboard My Pasar';

		$data['s'] = $this->M_dashboard->getData();
		$data['t'] = $this->M_dashboard->getTanggal();
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}
	
}
