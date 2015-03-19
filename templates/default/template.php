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
		<div class="header">My CMS</div>
		<div class="clear"></div><!--pembatas/pemisah object-->
		<div class="sidebar">Di sini letak text bagian sisi</div>
		<div class="content"><?php echo $this->appOutput(); ?></div>
		<div class="clear"></div>
		<div class="footer">Text bagian footer</div>
	</div>
</body>
</html> 