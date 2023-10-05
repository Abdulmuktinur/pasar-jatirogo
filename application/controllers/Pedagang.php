<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pedagang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pedagang');
		$this->load->library ('form_validation');
		cek_belum_logi();
	}

	public function index()
	{

		$data['pedagang'] = $this->M_pedagang->getData();
		
		$data['judul'] = 'Admin | Data Pedagang';

		$this->load->view('templates/header',$data);
		$this->load->view('pedagang/pedagang', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Data Pedagang';
		// $data['stan'] = $this->M_stan->getAllStan();

		$this->form_validation->set_rules('noip', 'Nomor induk pedagang', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('pedagang/form');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_pedagang->addDataPedagang();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('pedagang');
		}
	}

	public function ubah($id)
	{
		$data['judul'] = "Edit Data";
		$data['pedagang'] = $this->M_pedagang->getPedagangById($id);
		// $data['stan'] = $this->M_stan->getAllStan();

		$this->form_validation->set_rules('noip', 'Nomor induk pedagang', 'required|numeric');
        // $this->form_validation->set_rules('nomor_stan', 'Nomor Stan', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		
		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('pedagang/editForm', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_pedagang->ubahDataPedagang();
			$this->session->set_flashdata('flash','diubah');
			redirect('pedagang');
		}
	}

	public function hapus()
	{
		$id=$this->input->post('NOIP');
		$this->M_pedagang->hapusDataPedagang($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('pedagang');
	}


}
