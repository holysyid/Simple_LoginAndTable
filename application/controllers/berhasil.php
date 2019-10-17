<?php 
 //buat class dan fungsi untuk berhasil login
class Berhasil extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login")); //baseurl login
		}
	}
 
	 function index()
	{
		$data['Mahasiswa']= $this->m_login->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	/*menambahkan function untuk menampilkan v_input*/
	
	function tambah_aksi(){
		$NIM = $this->input->post('NIM');
		$Nama = $this->input->post('Nama');
		$Alamat = $this->input->post('Alamat');
 /*memasukkan data dari form post*/
		$data = array(
			'NIM' => $NIM,
			'Nama' => $Nama,
			'Alamat' => $Alamat
			);
		$this->m_login->input_data($data,'mahasiswa');
		/*memasukkan semua data ke tabel Mahasiswa*/
		redirect('berhasil');
		// mengalihkan ke index/belajarcrud//
	}
	function hapus($NIM){
		$where = array('NIM' => $NIM);
		$this->m_login->hapus_data($where,'mahasiswa');
		redirect('berhasil');
	}
	/*Membuat funsi hapus dari informasi dari NIM*/
	function edit($NIM){
	$where = array('NIM' => $NIM);
	$data['mahasiswa'] = $this->m_login->edit_data($where,'mahasiswa')->result();
	$this->load->view('v_edit',$data);
}
/*Membuat fungsi mendapat informasi satu data yang diambil dengan NIM*/
function update(){
		$NIM = $this->input->post('NIM');
		$Nama = $this->input->post('Nama');
		$Alamat = $this->input->post('Alamat');
 /*memasukkan data dari form post*/
		$data = array(
			'NIM' => $NIM,
			'Nama' => $Nama,
			'Alamat' => $Alamat
			);

		$where=array(
			'NIM' =>$NIM
		);

		$this->m_login->update_data($where,$data,'mahasiswa');
		/*mengubah satu data di tabel Mahasiswa dengan spesifikasi yang diambil dari NIM*/
		redirect('berhasil');
		// mengalihkan ke index/belajarcrud//
}
}