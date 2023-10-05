<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->library('form_validation');
		cek_belum_logi();
	}

	public function index()
	{
		
		$data['judul'] = 'Admin | Data Pegawai';
		
		$data['pegawai'] = $this->M_pegawai->getData();

		$this->load->view('templates/header', $data);
		$this->load->view('pegawai/pegawai',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['judul'] = "Tambah Data";
		
		$this->form_validation->set_rules('NIP', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('NIK', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('NPWP', 'NPWP', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telepone', 'Nomor Telepon', 'required|numeric');

		if($this->form_validation->run() == FALSE ){
			$this->load->view('templates/header', $data);
			$this->load->view('pegawai/addForm');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_pegawai->addPegawai();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('pegawai');
			// echo 'berhasil';
		}
	}

	public function ubah($id)
	{
		$data['judul'] = "Edit Data";
		$data['pegawai'] = $this->M_pegawai->getDatabyId($id);

		$this->form_validation->set_rules('NIP', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('NIK', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('NPWP', 'NPWP', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telepone', 'Nomor Telepon', 'required|numeric');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('pegawai/editForm', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else {
			$this->M_pegawai->ubah();
			$this->session->set_flashdata('flash','Diubah');
			redirect('pegawai');
		}
	}

	public function hapus()
	{
		$id=$this->input->post('NIP');
		$this->M_pegawai->hapus($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('pegawai');
	}
}
