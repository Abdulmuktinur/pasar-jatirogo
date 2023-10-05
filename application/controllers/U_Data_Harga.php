<?php defined('BASEPATH') OR exit('No direct script access allowed');

class U_Data_Harga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_data_harga', 'M_komoditas']);
	}


	public function index()
	{   
		$this->load->view('user/data_harga');
    }
}