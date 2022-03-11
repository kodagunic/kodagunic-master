<!DOCTYPE html>
<html lang="en">
<?php
	define("SITEPATH", 'http://localhost/kodagunic-master/');
	//define("SITEPATH", 'https://10.171.154.72/nictemp/');
?> 
<head>
	<title>KODAGU VA Recruitment</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo SITEPATH; ?>vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo SITEPATH; ?>css/base.css" />
    <link rel="stylesheet" href="<?php echo SITEPATH; ?>css/base-responsive.css" />
    <link rel="stylesheet" href="<?php echo SITEPATH; ?>css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo SITEPATH; ?>css/slicknav.min.css" />
    <link rel="stylesheet" href="<?php echo SITEPATH; ?>css/font-awesome.min.css" />
    <link href="<?php echo SITEPATH; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo SITEPATH; ?>js/popper.min.js"></script>
</head>


<body>
	<div style="display:none;">
		<h1>Heading1</h1><h2>Heading2</h2>
	</div>
	
	<!-- Accessibility -->
	<div class="container d-flex clearfix" id="b-accessibility">
		<div class="b-ministryname">
			<div class="text-right d-inline-block font-weight-bold b-acc-goi my-sm-1 pr-sm-2">
				<span><a href="https://www.karnataka.gov.in" target="_blank">ಕರ್ನಾಟಕ ಸರ್ಕಾರ </a></span> <br> 
                <span><a href="https://www.karnataka.gov.in/english" target="_blank">GOVERNMENT OF KARNATAKA</a></span>
			</div>

			<div class="font-weight-bold d-inline-block b-acc-ministry my-sm-1 pl-sm-1">
				<span><a href="https://kodagu.nic.in/" target="_blank">ಕೊಡಗು ಜಿಲ್ಲೆ</a></span> <br> 
                <span><a href="https://kodagu.nic.in/en/" target="_blank">KODAGU DISTRICT</a></span>
			</div>
		</div>
				
	</div>


	<!-- Header -->
	<div class="container clearfix" id="b-header">
		<div class="float-left d-flex h-100">
			<a href="https://www.karnataka.gov.in/english" target="_blank">
                <img src="<?php echo SITEPATH; ?>images/gok.png" class="align-self-center b-emblem-image" alt="Government of Karnataka">
            </a>
		</div>

		<div class="float-left d-flex h-100">
			<strong class="align-self-center pl-3"><span>ಗ್ರಾಮ ಲೆಕ್ಕಿಗರ ನೇಮಕಾತಿ </span> <br><span>VILLAGE ACCOUNTANT RECRUITMENT</span></strong>
		</div>

        <div class="float-right h-100">
            <a href="https://www.nic.in/" target="_blank">
                <img src="<?php echo SITEPATH; ?>images/nic.png" class="float-end img-fluid" alt="NIC">
            </a>
            <a href="https://www.india.gov.in/" target="_blank">
                <img src="<?php echo SITEPATH; ?>images/emblem-dark.png" class="float-end img-fluid" alt="NIC">
            </a>
		</div>
	</div>

	<style type="text/css">
		select.error,textarea.error,input.error{
			color:#FF0000;
		}
		label.error{float:right;padding-left:10px;}
		span.star{color:#ff0000}
		error{
			color:#F00;
			background-color: #FFF;
		}
	
		.bar1, .bar2, .bar3 {
		    width: 25px;
		    height: 3px;
		    background-color: #fff;
		    margin: 5px 0;
		    transition: 0.4s;
		}

		.change .bar1 {
		  -webkit-transform: rotate(-45deg) translate(-5px, 5px);
		  transform: rotate(-45deg) translate(-5px, 5px);
		}

		.change .bar2 {opacity: 0;}

		.change .bar3 {
		  -webkit-transform: rotate(45deg) translate(-5px, -7px);
		  transform: rotate(45deg) translate(-5px, -7px);
		}
	</style>

