<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/ready.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					Admin
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"><span >Admin</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo site_url().'/welcome'?>"><i class="fa fa-power-off"></i> Logout</a>
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
						<li class="nav-item">
							<a href="<?=site_url ()?>/admin">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?=site_url ()?>/admin/data_mhs">
								<i class="la la-file-text-o"></i>
								<p>Data Mahasiswa</p>
							</a>
						</li>
						<li class="nav-item active">
							<a href="forms.html">
								<i class="la la-file-text-o"></i>
								<p>Data Reviewer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="la la-file-text-o"></i>
								<p>Skema Bidang</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="la la-file-text-o"></i>
								<p>Data Jurusan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="la la-file"></i>
								<p>Data Proposal</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Tambah Data Mahasiswa</h4>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Tambah Data Mahasiswa</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="text">Nama</label>
											<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
										</div>
										<div class="form-group">
											<label for="text">NIP</label>
											<input type="text" class="form-control" id="nip" placeholder="NIP">
										</div>
										<div class="form-check">
											<label>Jenis Kelamin</label><br/>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
												<span class="form-radio-sign">Laki-laki</span>
											</label>
											<label class="form-radio-label ml-3">
												<input class="form-radio-input" type="radio" name="optionsRadios" value="">
												<span class="form-radio-sign">Perempuan</span>
											</label>
										</div>
											<div class="form-group">
												<label for="jurusan">Jurusan</label>
												<select class="form-control" id="jurusan">
													<option value=" 1">Jurusan</option>
				                                    <option value="1">Administrasi Niaga</option>
				                                    <option value="1">Akuntansi</option>
				                                    <option value="1">Teknik Elektro</option>
				                                    <option value="1">Teknik Kimia</option>
				                                    <option value="1">Teknik Mesin</option>
				                                    <option value="1">Teknik Sipil</option>
				                                    <option value="1">Teknologi Informasi</option>
												</select>
											</div>
											
											<!-- <div class="form-group">
												<label for="comment">Comment</label>
												<textarea class="form-control" id="comment" rows="5">

												</textarea>
											</div> -->
										</div>
										<div class="card-action">
											<button class="btn btn-success">Simpan</button>
											<a href="<?=site_url ()?>/admin/data_reviewer"class="btn btn-danger">Batal</a>
										</div>
									</div>
								</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
						<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?php echo base_url()?>assets/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/ready.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/demo.js"></script>
</html>