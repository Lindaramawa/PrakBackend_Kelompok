<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller{ // untuk mengatur class dari model
	function __construct(){
	parent:: __construct();
	$this->load->model("crud_m");
	$this->load->library('form_validation');
    }
	function index(){ // tampilan daftar data parkir
		$data['crud'] = $this->crud_m->getCrud();
		$this->load->helper('tanggal');
		$waktu = date('Y-m-d');
		echo formatHariTanggal($waktu);
		$this->load->view('crud/index', $data);
		$this->load->view('layout/header');
	}
	public function add(){ // tampilan tambah data
		$this->load->helper('tanggal');
		$waktu = date('Y-m-d');
		echo formatHariTanggal($waktu);
		$this->load->view('crud/add');
		$this->load->view('layout/header');
	} 
	function aksi(){
		$this->form_validation->set_rules('id_user','No','required');
		$this->form_validation->set_rules('jenis_kendaraan','Jenis Kendaraan','required');
		$this->form_validation->set_rules('plat_kendaraan','Plat Kendaraan','required');
		$this->form_validation->set_rules('biaya_per_jam','Biaya per Jam','required');
		$this->form_validation->set_rules('lama_parkir','Lama Parkir','required');
		
		if($this->form_validation->run() != false){
			$this->crud_m->submit();
			$this->session->set_flashdata('success_msg','Data Berhasil Di Tambah');
			redirect(base_url('crud/index'));
		}else{
			$this->load->view('crud/add');
		}
	}
	function edit($id_user){ // tampilan mengedit
		$data['crud'] = $this->crud_m->getCrudById($id_user);
		$this->load->helper('tanggal');
		$waktu = date('Y-m-d');
		echo formatHariTanggal($waktu);
		$this->load->view('layout/header');
		$this->load->view('crud/edit',$data);
	} 
	function update(){ // tampilan setelah menginputkan data yang diedit 
		$result = $this->crud_m->update();
		if($result){
			$this->session->set_flashdata('success_msg','Data Berhasil Di Update');
		}else{
			$this->session->set_flashdata('eror_msg','Data Gagal Di Update');
		}
		redirect(base_url('crud/index'));
	}
	function delete($id_user){ // menghapus data
		$result = $this->crud_m->delete($id_user);
		if($result){
			$this->session->set_flashdata('success_msg','Data Berhasil Di Hapus');
		}else{
			$this->session->set_flashdata('eror_msg','Data Gagal Di Hapus');
		}
		redirect(base_url('crud/index'));
	}
}
?>