<?php defined('BASEPATH') OR exit('No direct script access allowed');

class U_Data_Pedagang extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		$this->load->model('M_pedagang');
		// $this->in/dex();

	}

	public function index()
	{
        $data['judul'] = "Data Pedagang";
        $data['pedagang'] = $this->M_pedagang->getData();

		$this->load->view('user/data_pedagang', $data);
	}
	
	public function details($id){
		$data['pedagang'] = $this->M_pedagang->details($id);

		$this->load->view('user/data_stan_pasar', $data);
		// print_r($data);
	}
}
