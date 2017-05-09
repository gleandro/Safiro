<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Safiro</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>application/helpers/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>application/helpers/js/materialize.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function(){
    	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    	$('.modal').modal();
    });
</script>
</head>
<body>
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo right">Safiro</a>
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url(); ?>home/history">History</a></li>
					<li><a href="<?php echo base_url(); ?>dashboard/">Dashboard</a></li>
				</ul>
			</div>
		</nav>