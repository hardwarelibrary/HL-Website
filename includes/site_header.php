<?php
	require("site_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<!-- Basic page information -->
	<meta name="description" content="Hardware Library provides cutting edge technology right at your finger tips. 
	We provide advanced hardware for consumers, corporations/nonprofits, and events. " />
	<meta name="keywords" content="Hardware, hackathon, library, technology, technology rental, developer hardware, developer" />
	<meta name="author" content="Hardware Library" />
	<title>Hardware Library</title>

	<!-- Magnific Popup core CSS file -->


	<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- Magnific Popup core JS file -->


	<!-- Fav Icon -->
	<link rel="shortcut icon" href="resources/images/favicon.ico">

	<!-- Custom Google fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">

	<!-- Bootstrap CSS Style -->
	<link rel="stylesheet" href="resources/css/bootstrap/css/bootstrap.min.css">

	<!-- Template CSS Style -->
	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="stylesheet" href="resources/css/responsive.css">

	<!-- Animate CSS  -->
	<link rel="stylesheet" href="resources/css/animate.css">

	<!-- Pixeden Stroke Font Icons -->
	<link rel="stylesheet" href="resources/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- FontAwesome 4.3.0 Icons  -->
	<link rel="stylesheet" href="resources/css/fontawesome/css/font-awesome.min.css">

	<!-- Magnific Popup CSS Style -->
	<link rel="stylesheet" href="resources/css/magnific-popup/magnific-popup.css">

	<!-- Owl Carousel CSS Style -->
	<link rel="stylesheet" href="resources/css/owl.carousel/owl.carousel.css">
	<link rel="stylesheet" href="resources/css/owl.carousel/owl.theme.css">
	<link rel="stylesheet" href="resources/css/owl.carousel/owl.transitions.css">

	<!-- Override CSS file -->
	<link rel="stylesheet" href="resources/css/override.css">

	<!-- Other custom CSS -->
	<link rel="stylesheet" href="resources/css/custom.css">

	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
		if(basename($_SERVER['PHP_SELF'],".php")=='index'){
	?>
	<!-- Preload the Whole Page -->
	<div id="preloader">
		<div class="battery inner">
			<div class="load-line"></div>
		</div>
	</div>
<?php
		}
?>
	<div id="wrapper ">

		<!-- Header -->
		<header class="header <?php if(basename($_SERVER['PHP_SELF'],".php")!='index'){ echo "affix"; }	?>">

            <?php
				include("site_nav.php");
			?>

		</header>
		<!-- end header -->
