<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		
	}

	public function index()
	{
		cek_sudah_login();
		// $this->load->view('templates/header');
		$data['judul'] = "Admin | Login MyPSR";
		$this->load->view('login', $data);
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/footer');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$query=$this->M_login->login($post);
			if($query->num_rows() > 0){
				$row= $query->row();
				$params = array(
					'admin_id' => $row->ADMIN_ID,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat Login berhasil');	
					window.location='".site_url('pegawai')."';
					</script>";
			}
			else{
				echo "<script>
					alert('Login gagal, silahkan periksa username atau password salah');	
					window.location='".site_url('login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('admin_id');
		$this->session->unset_userdata($params);
		redirect('user');
	}

}
