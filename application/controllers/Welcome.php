
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// Load the database library
		$this->load->model('mymodel');

		//$this->load->view('welcome_message');
		$data=$this->mymodel->get_data();

		foreach ($data as $d){
			echo "nim:".$d['nim'].'<br>';
			echo "nama:".$d['nama'].'<p>';
		}

		// nambah dikit harusnya gapapa
	}

	// inserting 
	public function insertdata(){
		$res=$this->mymodel->insertdata(
			't_mhs', array(
				"nim"=>"2212738247283",
				"nama"=>"muhammad syauqi husin", 
				"agama"=>"islam",
				"alamat"=>"kenep",
				"asal_sekolah"=>"persis"

			));
			if ($res==1){
				echo "input sukses";
			} else {
				echo "input gagal";
			}


	}

	public function updatedata(){
		$res=$this->mymodel->updatedata(
			't_mhs', 
			array(
				"nama"=>"nadia", 
				"agama"=>"islam",
				"alamat"=>"earth",
				"asal_sekolah"=>"anywhere"
			),
			array("nim"=>"22121004")
		);
			if ($res==1){
				echo "edit sukses";
			} else {
				echo "edit gagal";
			}
	}
	
	// delete

	public function deletedata(){
		$res=$this->mymodel->deletedata(
			't_mhs', 
			array("nim"=>"2212003")
		);
			if ($res==1){
				echo "hapus sukses";
			} else {
				echo "hapus gagal";
			}
	}

	public function showedup()
	{
	$this->load->view('helo');
	}

	public function tampil($satu="Nadia", $dua="Ekawati")
	{
		echo "Nama saya adalah : ".$satu." ".$dua;
	}
	
	public function muncul()
	{
		echo "Saya mahasiswa Semester 7a";
	}
}
?>	


