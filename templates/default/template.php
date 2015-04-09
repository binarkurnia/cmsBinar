<!doctype html>
<html>
<head>
	<title>Ini template default dalam CMS</title>
	<link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplatePath(); ?>css/style.css' />
	<!--
	type: text, format : css, bentuknya stylesheet, href: letak
-->
</head>
<body>
	<div class="wrapper"><!--pembungkus paling luar-->
		<div class="header"><?php $this->widgetOutput('logoPosition'); ?></div>
		<div class="clear"></div><!--pembatas/pemisah object-->
		<div class="sidebar"><?php $this->widgetOutput('sidebarPosition'); ?></div>
		<div class="content"><?php echo $this->appOutput(); ?></div>
		<div class="clear"></div>
		<div class="footer">Text bagian footer</div>
	</div>
</body>
</html> 