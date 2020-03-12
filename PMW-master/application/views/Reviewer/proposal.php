<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Proposal</title>
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

     <!-- <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-12 col-lg-12">
                    <div class="learning_member_text">
                        <h3 class="mb-30">List Proposal</h3>
                        <div class="containerfile"> 
                            <div class="card-body">
                                        <table class="table mt-7">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Ketua Pelaksana</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Skema</th>
                                                    <th scope="col">Dosen Pendamping</th>
                                                    <th scope="col">Jumlah Anggota</th>
                                                    <th scope="col">File</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td colspan="2">Larry the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="learning_part">
        <div class="container">
            <div class="col-md-12">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="main-panel">
                    <div class="content">
                        <div class="container-fluid" >
                                <h3 class="mb-30" align="align-items-center">Daftar Proposal</h3>
                            <div class="row">
                                <!-- <div class="col-md-12"> -->
                                    <div class="card align-items-center">
                                        <div class="card-body">
                                        <?php if($proposal == "Belum Ada Proposal"){ ?>
                                            <p>Anda Belum Mengupload Proposal Anda</p>
                                        <?php }else{ ?>
                                            <table class="table table-striped mt-3">
                                                <thead>
                                                    <tr>
                                                        <th >No</th>
                                                        <th >Judul</th>
                                                        <th >Skema</th>
                                                        <th >Dosen Pendamping</th>
                                                        <th >NIP Dosen Pembimbing</th>
                                                        <!-- <th >Anggota</th> -->
                                                        <th >File</th>
                                                        <th >Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $no=1;foreach($proposal as $key) {?>
                                                    <tr>
                                                        <td><?php echo $no?></td>
                                                        <td><?php echo $key->proposal_judul?></td>
                                                        <td><?php echo $key->skema_nama?></td>
                                                        <td><?php echo $key->proposal_dospem?></td>
                                                        <td><?php echo $key->proposal_dospem_nip?></td>
                                                        <!-- <td><a href="<?php echo site_url().'Peserta/lihat_anggota/'.$key->proposal_id?>">Anggota</a></td> -->
                                                        <td><a href="<?php echo site_url().'assets/proposal/'.$key->proposal_file_name?>">File Proposal</a></td>
                                                        <td><a href="<?php echo site_url().'Reviewer/do_review/'.$key->proposal_id?>">Review</a></td>
                                                    </tr>
                                                <?php $no++;} ?>
                                                </tbody>
                                            </table>
                                        <?php } ?>
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