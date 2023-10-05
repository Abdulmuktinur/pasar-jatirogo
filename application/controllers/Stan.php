<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Stan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_stan','M_pedagang']);
		$this->load->library('form_validation');
		cek_belum_logi();
	}

	public function index()
	{
		$data['judul'] = 'Admin | Data Stan';
	
		$data['stan'] = $this->M_stan->getData();
		$this->load->view('templates/header', $data);
		$this->load->view('stan/stan', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Data Stan';
		$data['pedagang'] = $this->M_pedagang->getAllPedagang();
		$data['category'] = $this->M_stan->getAllCategory();
		$data['biaya'] = $this->M_stan->getAllBiaya();
		
		$this->form_validation->set_rules('nomor_stan', 'Nomor Stan', 'required');
		$this->form_validation->set_rules('NOIP', 'Nama Pedagang', 'required');
		$this->form_validation->set_rules('lokasi_stan', 'Lokasi Stan', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('stan/form', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->M_stan->addStan();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('stan');
		}
	}

	public function ubah($id)
	{
		$data['judul'] = 'Edit Stan';
		$data['stan'] = $this->M_stan->getDataById($id);
		$data['pedagang'] = $this->M_pedagang->getAllPedagang();
		$data['category'] = $this->M_stan->getAllCategory();
		$data['biaya'] = $this->M_stan->getAllBiaya();

		$this->form_validation->set_rules('nomor_stan', 'Nomor Stan', 'required|numeric');
		$this->form_validation->set_rules('NOIP', 'Nama Pedagang', 'required');
		$this->form_validation->set_rules('lokasi_stan', 'Lokasi Stan', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('stan/editForm', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_stan->ubah();
			$this->session->set_flashdata('flash','diubah');
			redirect('stan');
		}
	}

	public function hapus(){
		$id = $this->input->post('id_stan');
		$this->M_stan->hapus($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('stan');
	}
}
