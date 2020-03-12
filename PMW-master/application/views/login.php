<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>

<body style="background-image:url(<?= base_url('assets/img/bg5.png') ?>)">
    <!--::header part start::-->
    
    <!-- Header part end-->

  

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                    <div class="section_tittle text-center">
                        <img src="<?php echo base_url()?>assets/img/logo1.png" alt="">
                         <br> 
                         <br><h5>Masukkan Username dan Password dengan benar</h5>
                         <?php echo form_open('Login/cekLogin'); ?>
                            <div class="mt-10">
                                <input type="text" name="username" placeholder="NIM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'"
                                 required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="Password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                                 required class="single-input">
                            </div>
                            
                            <br>
                            <div class="justify-content-center">
                            <?php echo validation_errors()?>
                            <button type="submit" class="genric-btn success circle">Masuk</button>
                            <?php echo form_close(); ?>
                                <a href="<?php echo site_url().'welcome'?>" class="genric-btn danger circle">Kembali</a></div>
                            <div class="justify-content-center"></div>
                            <br><h6>Tidak punya akun, Daftar sekarang</h6>
                             <div class="justify-content-center"><a href="<?php echo site_url().'Login/daftar'?>" class="genric-btn info-border circle">Daftar</a></div>
                    </div>
                    </div>
            </div>
        </div>
    </section>
</body>

</html>