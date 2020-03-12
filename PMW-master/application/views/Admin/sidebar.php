<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $title?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/ready.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/demo.css">
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'?>" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="#" class="logo">Admin Panel</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-right">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" align="align-items-left" data-toggle="dropdown" href="#" aria-expanded="false"><span >Admin</span></a>
							<ul class="dropdown-menu dropdown-user">
									<a class="dropdown-item" href="<?php echo base_url().'Login/logout'?>"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<ul class="nav">
						<li class="nav-item ">
							<a href="<?=base_url ()?>Admin">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url ()?>Admin/data_peserta">
								<i class="la la-file-text-o"></i>
								<p>Data Mahasiswa</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url ()?>Admin/data_reviewer">
								<i class="la la-file-text-o"></i>
								<p>Data Reviewer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url ()?>Admin/data_skema">
								<i class="la la-file-text-o"></i>
								<p>Skema Bidang</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url ()?>Admin/data_proposal">
								<i class="la la-file"></i>
								<p>Data Proposal</p>
							</a>
						</li>
					</ul>
				</div>
			</div>