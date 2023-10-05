<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('M_komoditas');
		$this->load->library('form_validation');
		cek_belum_logi();
	}


	public function index()
	{
		$data['judul'] = 'Admin | Data Komoditas';
		
		$data['komoditas'] = $this->M_komoditas->getData();
		
		$this->load->view('templates/header',$data);
		$this->load->view('komoditas/komoditas', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Data Komoditas';
		$data['category']=$this->M_komoditas->getAllCategory();
		
        $this->form_validation->set_rules('id_komoditas', 'Nama Komoditas', 'required');
        $this->form_validation->set_rules('nama_komoditas', 'Nama Komoditas', 'required');
        $this->form_validation->set_rules('ID_CATEGORY', 'Nama Komoditas', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('komoditas/addForm', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->M_komoditas->addKomoditas();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('komoditas');
		}
	}

	public function ubah($id)
	{
		$data['judul'] = "Edit Data";
		$data['komoditas'] = $this->M_komoditas->getDataById($id);
		$data['category']=$this->M_komoditas->getAllCategory();

		$this->form_validation->set_rules('id_komoditas', 'Nama Komoditas', 'required');
        $this->form_validation->set_rules('nama_komoditas', 'Nama Komoditas', 'required');
        $this->form_validation->set_rules('ID_CATEGORY', 'Nama Komoditas', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required|alpha_dash');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('komoditas/editForm', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_komoditas->ubah();
			$this->session->set_flashdata('flash','diubah');
			redirect('komoditas');
		}
	}

	public function hapus(){
		$id=$this->input->post('KD_KOMODITAS');
		$this->M_komoditas->hapus($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('komoditas');
	}
}
