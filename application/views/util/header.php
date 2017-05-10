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
    	ncsistem.Generar_header();
    });

		ncsistem=
		{
			Generar_header:function()
			{
				var ses_idperfil = $("#ses_idperfil").text();

				if (ses_idperfil == 1) {
					var HTML = '<li><a href="<?php echo base_url(); ?>">Home</a></li>';
				}
				$("#nav_header").empty().append(HTML);
			}
		}

	</script>
</head>
<body>
	<div class="hide" id="ses_idperfil"><?=$idperfil?></div>
	<nav>
		<div class="nav-wrapper">
			<a href="#" data-constrainWidth="false" class="brand-logo right dropdown-button" data-hover="true" data-activates='dropdown1'>Safiro</a>
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="#!"><?=$nombre?> <?=$apellido?></a></li>
				<li><a href="#!">three</a></li>
				<li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
				<li><a href="<?php echo base_url() ?>usuario/cerrar_sesion"><i class="material-icons">cloud</i>Cerrar sesion</a></li>
			</ul>
			
			<ul id="nav_header" class="left hide-on-med-and-down">
				<!--
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>home/history">History</a></li>
				<li><a href="<?php echo base_url(); ?>dashboard/">Dashboard</a></li>
			-->
		</ul>

	</div>
</nav>