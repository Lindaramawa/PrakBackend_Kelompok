<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_m extends CI_Model{ // mengatur model untuk mengambil/ menampilkan data dari database
	function getCrud(){
	$query = $this->db->get('kendaraan');
	if($query->num_rows() > 0){
			return $query->result();
	}else{
		return false;
		}
	}
	function submit(){ // untuk memproses data yang sudah inputkan
		$field = array(
			'id_user'=>$this->input->post('id_user'),
			'jenis_kendaraan'=>$this->input->post('jenis_kendaraan'),
			'plat_kendaraan'=>$this->input->post('plat_kendaraan'),
			'biaya_per_jam'=>$this->input->post('biaya_per_jam'),
			'lama_parkir'=>$this->input->post('lama_parkir'),
		);
		$this->db->insert('kendaraan', $field);
		if($this->db->affected_rows() > 0 ){
			return true;
		}else{
			return false;
		
		}	
	} 
	function getCrudById($id_user){ // untuk mendapatkan data CRUD berdasarkan id
		$this->db->where('id_user',$id_user);
		$query = $this->db->get('kendaraan');
		if($query->num_rows() > 0){ // untuk mengambil ada yang dicari ada atau tidak ada
			return $query->row();
		}else{
			return false;
		}
	}
	function update(){ // untuk mengedit data
		$id_user = $this->input->post('id_user');
		$field = array(
		'jenis_kendaraan'=>$this->input->post('jenis_kendaraan'),
		'plat_kendaraan'=>$this->input->post('plat_kendaraan'),
		'biaya_per_jam'=>$this->input->post('biaya_per_jam'),
		'lama_parkir'=>$this->input->post('lama_parkir'),
		);
		$this->db->where('id_user',$id_user); // dimana data diubah berdasarkan id yang sudah tertera sebelumnya
		$this->db->update('kendaraan', $field);
		if($this->db->affected_rows() > 0){ 
			return true;
		}else{
			return false;
		}
	}
	function delete ($id_user){ // menghapus data
		$this->db->where('id_user',$id_user);
		$this->db->delete('kendaraan');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}
?>