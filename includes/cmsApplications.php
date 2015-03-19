<?php 

require_once('cmsBase.php');
//memastikan modul cmsBase hanya di lOAD sekali
class CmsApplications extends CmsBase {
	// semua kode yang ada di sini 
	// dapat diakses melalui fungsi utama
	// dalam CMS 
	// management halaman web

	function run() {
	if (isset($_REQUEST['task'])){

		$task = $_REQUEST['task']; 
		switch($task){ 
			case 'addcontent' : 
				$this->addcontent(); 
				break;
			case 'anyothertask' :
				$this->anyothertask();
				break;
			default :
				$this->viewcontent();
				echo '<hr><br>user tidak ada request';
				break;
		}
	} 
	else {
		$this->viewcontent();
		

		}
	}

	function addcontent(){
		echo 'Di sini akan dibuat fungsi menambah konten';
	}

	function viewcontent(){
		echo 'Di sini akan dibuat fungsi untuk menampilkan konten';
	}

	function anyothertask(){
		echo 'Di sini akan dibuat fungsi sesuatu';
	}
}