<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->model_crud->getUser('data_mahasiswa');
		$this->load->view('welcome_message', $this->data );
	}

	public function form_input()
	{
		$this->load->view('form_input');
	}

	public function insert()
	{
		$nama =$_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$data = array('nama' => $nama,'jenis_kelamin' => $jenis_kelamin,'alamat' => $alamat,'tanggal_lahir' => $tanggal_lahir);
		$tambah = $this->model_crud->tambahData('data_mahasiswa',$data);
		if($tambah > 0){
			redirect('Welcome\index');
		}
		else{
			echo 'Failed';
		}
	}

	public function delete($id)
	{
		$hapus  = $this -> model_crud->hapusData('data_mahasiswa',$id);
		if($hapus > 0){
			redirect('Welcome\index');
		}
		else{
			echo 'Failed';
		}
	}

	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('data_mahasiswa',$id);
		$this->load->view('form_edit',$this->data);
	}

	public function update($id)
	{
		$nama =$_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$data = array('nama' => $nama,'jenis_kelamin' => $jenis_kelamin,'alamat' => $alamat,'tanggal_lahir' => $tanggal_lahir);
		$edit = $this->model_crud->editData('data_mahasiswa',$data,$id);
		if($edit > 0){
			redirect('Welcome\index');
		}
		else{
			echo 'Failed';
		}
	}
}
