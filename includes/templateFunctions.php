<?php 
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase {
	// Semua fungsi terkait dengan
	// pengaturan template ada di sini

	var $templateName = 'default';
	var $widgetPosition = array();

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
		$appname = (isset($_REQUEST['app']))?$_REQUEST['app']:'default';
		require_once('apps/'.$appname.'/'.$appname.'.php');
		$application = ucfirst($appname).'Application';
		$app = new $application();
		$app->run();
	}

	function widgetOutput($position='default'){
		if(!empty($this->widgetPosition[$position])){
			$widgets=$this->widgetPosition[$position];
			foreach($widgets as $widgetObject){
				$widgetName = $widgetObject->name;
				$widgetParameters = $widgetObject->paramenters;
				require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
				$widgetclass=ucfirst($widgetName).'Widget';
				$widget = new $widgetclass();
				$widget->run($widgetName,$widgetParameters);
			}
		}
	}

	function setWidget($position, $widgetName, $params = array()){
		$widget = new StdClass;
		$widget->name = $widgetName;
		$widget->paramenters = $params;

		if(empty($this->widgetPosition[$position])){
			$this->widgetPosition[$position] = array($widget);
		} else {
			array_push($this->widgetPosition[$position], $widget);
		}
	}
}?>