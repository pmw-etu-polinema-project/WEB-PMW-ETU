<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PMW POLINEMA</title>
    <link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?php echo base_url()?>assets/img/logo1.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=site_url ()?>Peserta">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url ()?>Peserta/identitas_peserta">Identitas Peserta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url ()?>Peserta/upload_proposal">Upload Proposal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url ()?>Peserta/daftar_proposal">Daftar Proposal</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url ()?>Peserta/pengumuman">Pengumuman</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="<?php echo site_url().'Login/logout'?>" class="btn_1">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                    <div class="section_tittle text-center">
                        <br>
                        <br>
                        <h3 class="mb-30">Identitas Peserta</h3>
                        <?php echo form_open('Peserta/simpan_identitas/'.$identitas[0]->peserta_id); ?>
                            <h5 align="left">Nama Ketua </h5>
                            <div class="mt-10">
                                <input type="text" name="nama_ketua" value="<?php echo $identitas[0]->peserta_nama?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ketua'"
                                disabled class="single-input">
                                 <input type="text" name="id" value="<?php echo $identitas[0]->peserta_id?>" disabled class="single-input" style="display:none">
                            </div>
                            <br>
                            <h5 align="left">NIM </h5>
                            <div class="mt-10">
                                <input type="text" name="nim" value="<?php echo $identitas[0]->peserta_nim?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'"
                                 disabled class="single-input">
                            </div>
                            <br>
                            <h5 align="left">No Handphone</h5>
                            <div class="mt-10">
                                <input type="text" name="no_hape" value="<?php echo $identitas[0]->peserta_no_hp?>" placeholder="No Handphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Handphone'"
                                class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Jurusan</h5>
                            <div class="mt-10">
                                <input type="text" name="jurusan" value="<?php echo $identitas[0]->jurusan_nama?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jurusan'"
                                 disabled class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Prodi</h5>
                            <div class="mt-10">
                                <input type="text" name="prodi" value="<?php echo $identitas[0]->prodi_nama?>" placeholder="Prodi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prodi'"
                                 disabled class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Password</h5>
                            <div class="mt-10">
                                <input type="text" name="password" value="<?php echo $identitas[0]->login_password?>" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                                class="single-input">
                                 <input type="text" name="login" value="<?php echo $identitas[0]->login_id?>" style="display:none">
                            </div>
                            <div class="justify-content-right" align="right"><button type="submit" class="genric-btn success circle">Update</button>
                            <?php echo form_close(); ?>
                                <a href="<?php echo site_url().'/welcome'?>" class="genric-btn danger circle">Batal</a></div>
                        
                    </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url()?>assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url()?>assets/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url()?>assets/js/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>

</body>

</html>