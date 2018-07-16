<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>
		<?php if($lan=='en')
                echo 'Forest Office, Dadeldhura';
            else
                echo 'वन कार्यलय, डडेल्धुरा ';
        ?>
	</title>
	<?php include('baselocation.php'); ?>
	<script id="facebook-jssdk" src="js/sdk.js"></script>

	<link rel="stylesheet" id="frontier-icon-css" href="css/genericons.css" type="text/css" media="all">
	<link rel="stylesheet" id="frontier-main-css" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" id="frontier-responsive-css" href="css/responsive.css" type="text/css" media="all">
	<link rel="icon" href="images/logo-ne.png" type="image/x-icon">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-migrate.min.js"></script>

	<link rel="stylesheet" href="css/custom.css" type="text/css" media="all">
	<style type="text/css">
	.language{color:white; font-weight: bold;}
	.language:hover{color:#555;}
	</style>
</head>

<body class="home page page-id-77 page-template-default custom-background">
	<div id="container" class="cf">
		<div id="header" class="cf">
			<div id="header-logo">
				<a href="<?php echo SITE_URL;?>"><img src="images/logod.png" alt="WELCOME"></a>
			</div>
			<div id="header-title">
				<?php if($lan!='en'){?>
					<h5>नेपाल सरकार</h5>
					<h5>वन तथा भू संरक्षण मन्त्रालय</h5>
					<h4>वन विभाग, डडेल्धुरा</h4>
				<? }
				else{?>
					<h5>Nepal Government</h5>
					<h5>Ministry of Forests and Soil Conservation</h5>
					<h4>Department of Forest, Dadeldhura</h4>
				<? }?>
			</div>
			<div id="header-flag">
				<img src="images/Nepal-flag.gif" style="width: 48%;margin-top: 4%;margin-left: 40%;" /><br>
				<?php if($lan!='en'){?>
					<a href="<?=SITE_URL?>en" class="language">Language: English</a>
				<? }
				else{?>
					<a href="<?=SITE_URL?>" class="language">Language: Nepali</a>
				<? }?>
			</div>
			<div style="clear: both;"></div>
		</div>	
		<nav id="nav-main" class="cf stack">	
			<ul id="menu-top" class="nav-main">
				<?php createMenu(0, "Header",$lan)?>
			</ul>			
		</nav>
		 <marquee><h4><strong>Welcome to Forest Department, Dadeldhura</strong></h4></marquee>
		<div id="main" class="col-scs cf">