<?php defined('BASEPATH') OR exit('No direct script access allowed');

class U_Data_Pegawai extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('M_pegawai');
		// $this->load->model('M_User');
	}

	public function index()
	{
        $data['judul'] = "Data Pegawai";
        $data['pegawai'] = $this->M_pegawai->getData();

		$this->load->view('user/data_pegawai',$data);
	}
	
}
