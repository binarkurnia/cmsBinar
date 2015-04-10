<?php 

require_once('cmsBase.php');
//memastikan modul cmsBase hanya di lOAD sekali
class CmsApplications extends CmsBase {
	// semua kode yang ada di sini 
	// dapat diakses melalui fungsi utama
	// dalam CMS 
	// management halaman web

	function run() {
		$method=(isset($_REQUEST['task']))?$_REQUEST['task']:'display';
		$this->$method();
	}

	function display(){
		echo 'this is base display';
	}



}