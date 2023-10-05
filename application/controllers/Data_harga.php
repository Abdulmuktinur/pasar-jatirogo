<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_harga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_data_harga', 'M_komoditas']);
		$this->load->library('form_validation');
		cek_belum_logi();
	}


	public function index()
	{
		
		$data['judul'] = 'Admin | Data Harga Komoditas';
		
		$this->load->view('templates/header', $data);
		$this->load->view('data_harga/data_harga');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['komoditas'] = $this->M_komoditas->getData();
		$data['judul'] = 'Data Harga Komoditas';

		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('id_komoditas', 'Nama Komoditas', 'required');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required');
		$this->form_validation->set_rules('tanggal_laporan', 'Tanggal Laporan', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('data_harga/form', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_data_harga->add();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('data_harga');
		}
	}

	public function hapus(){
		$id=$this->input->post('ID_LAPORAN');
		$this->M_data_harga->hapus($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('data_harga');
	}
}
