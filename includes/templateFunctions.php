<?php 
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase {
	// Semua fungsi terkait dengan
	// pengaturan template ada di sini

	var $templateName = 'default';

	function show(){
		require_once($this->getCurrentTemplatePath() . 'template.php');
	}

	function getCurrentTemplatePath(){
		//untuk mendapatkan nama folder tempat menyimpan Template
		return 'templates/' . $this->templateName . '/';
	}

	function setTemplate($templateName){
		$this->templateName = $templateName;
	}

	//fungsi untuk menggabungkan template
	//dengan management content
	function appOutput(){
		require_once('includes/cmsApplications.php');
		$app = new CmsApplications();
		$app->run();
	}
}