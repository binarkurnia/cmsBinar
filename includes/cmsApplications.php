<?php 

require_once('cmsBase.php');
//memastikan modul cmsBase hanya di lOAD sekali
class CmsApplications extends CmsBase {
	// semua kode yang ada di sini 
	// dapat diakses melalui fungsi utama
	// dalam CMS 
	// management halaman web
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