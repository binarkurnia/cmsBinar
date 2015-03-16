<?php
require_once('includes/cmsApplications.php'); 

$app = new CmsApplications();


if (isset($_REQUEST['task'])){

	$task = $_REQUEST['task']; 
	switch($task){ 
		case 'addcontent' : 
			$app->addcontent(); 
			break;
		case 'anyothertask' :
			$app->anyothertask();
			break;
		default :
			$app->viewcontent();
			break;
	}
} 
else {
	$app->viewcontent();
	echo '<hr><br>user tidak ada request';

}