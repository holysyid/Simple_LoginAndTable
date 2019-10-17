<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$nim = $this->input->post('nim'); //nangkap data dari v_login
		$password = $this->input->post('password');
		$where = array( //dimasukkan ke array
			'nim' => $nim,

			'password' => $password
			);
		$cek = $this->m_login->cek_login("mahasiswa",$where)->num_rows(); //data dikirim ke m_model trus dicek ada ngga recordnya
		if($cek > 0){ //fungsi jika ada track record data di db
 
			$data_session = array(
				'nim' => $nim,
				'Nama' => $Nama,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/berhasil")); //redirect ke kontroller web berhasil
 
		}else{
			echo "NIM dan/atau password salah !"; //apabila record data dari dbnya gada
			

		}
	}
 
	function logout(){
		//ngancurin sessionnya dan balikin ke form loginnya
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}


}


?>