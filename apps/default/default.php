<?php
require_once('includes/cmsApplications.php');
class DefaultApplication extends CmsApplications{
	function addcontent(){
		echo 'Di sini akan dibuat fungsi menambah konten';
	}

	function display(){
		echo 'Di sini akan dibuat fungsi untuk menampilkan konten';
	}

	function anyothertask(){
		echo 'Di sini akan dibuat fungsi yang lainnya';
	}
}