
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		

		$data=$this->mymodel->get_data();

		// 
		$this->load->view('input_mhs');
		$this->load->view('data_mhs', array('dt'=>$data));


		
		// Load the database library
		// $this->load->model('mymodel');

		// ini udah bener tapi kok error2 gajelas babi

		//$this->load->view('welcome_message');
		// $data=$this->mymodel->get_data();

		// foreach ($data as $d){
		// 	echo "nim:".$d['nim'].'<br>';
		// 	echo "nama:".$d['nama'].'<p>';
		// }

		// oke gini, inteliphense kadang suka error
		// dan agak tolol jadi ada kemungkinan harus di refresh berkali kali
		// dan nambah komentar ini biar keliatan beda
		// sama welcome.php ini perlu di perhatikan 
		// laragon setup nya harus bener nambah laragon di path system environment variable
		// terus di codeigniter nya juga harus bener setingannya
		// jadi kalo error mending di refresh aja berkali kali
		// tolol emang si inteliphense ini
		// nambah dikit harusnya gapapa
	}

	// inserting 
	public function insertdata(){


		// input by post method php ssr
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$asal_sekolah=$_POST['asal_sekolah'];


$res=$this->mymodel->insertdata(
			't_mhs', array(
				"nim"=>$nim,
				"nama"=>$nama, 
				"agama"=>$agama,
				"alamat"=>$agama,
				"asal_sekolah"=>$asal_sekolah

			));

/*

*/		

			if ($res==1){
				echo "<script>alert('input data sukses')</script>";
				echo "<meta http-equiv='refresh' content='0; url=../../'>";
			} else {
	echo "<script>alert('input data sukses')</script>";
				echo "<meta http-equiv='refresh' content='0; url=../../'>";
			}

	}

	public function editpage($nim){
		$data['student'] = $this->mymodel->get_data_by_nim($nim);
		if(empty($data['student'])){
			redirect('index.php/welcome');
		}
		$this->load->view('edit_mhs', $data);
	}

	public function updatedata(){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$agama=$_POST['agama'];
		$alamat=$_POST['alamat'];
		$asal_sekolah=$_POST['asal_sekolah'];

		$res=$this->mymodel->updatedata(
			't_mhs', 
			array(
				"nama"=>$nama, 
				"agama"=>$agama,
				"alamat"=>$alamat,
				"asal_sekolah"=>$asal_sekolah
			),
			array("nim"=>$nim)
		);
		if ($res==1){
			echo "<script>alert('Data berhasil diperbarui')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../'>";
		} else {
			echo "<script>alert('Gagal memperbarui data')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../'>";
		}
	}
	
	// delete

	public function deletedata($nim){
		$res=$this->mymodel->deletedata(
			't_mhs', 
			array("nim"=>$nim)
		);
		if ($res==1){
			echo "<script>alert('Data berhasil dihapus')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../'>";
		} else {
			echo "<script>alert('Gagal menghapus data')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../'>";
		}
	}

	// public function showedup()
	
}
?>

<!-- git kontolllll -->


