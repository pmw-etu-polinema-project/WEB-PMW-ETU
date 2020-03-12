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
                        <h3 class="mb-30">Hasil Reviewer</h3>
                            <h5 align="left">Judul </h5>
                            <div class="mt-10">
                                <input type="text" name="judul" onfocus="this.placeholder = ''" onblur="this.placeholder = 'judul'"
                                class="single-input">
                                 <input type="text" name="id" value="#" disabled class="single-input" style="display:none">
                            </div>
                            <br>
                            <h5 align="left">Kategori </h5>
                            <div class="mt-10">
                                <input type="text" name="kategori"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kategori'"
                                  class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Nama Ketua</h5>
                            <div class="mt-10">
                                <input type="text" name="ketua" placeholder="Ketua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketua'"
                                class="single-input">
                            </div>
                            <br>
                            <h5 align="left">NIM</h5>
                            <div class="mt-10">
                                <input type="text" name="nim" placeholder="NIM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'"
                                 class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Anggota (NIM-Nama Anggota)</h5>
                            <div class="mt-10">
                                <input type="text" name="anggota1"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Anggota1'"
                                 class="single-input">
                                 <br>
                                  <input type="text" name="anggota2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Anggota2'"
                                  class="single-input">
                                 <br>
                                  <input type="text" name="anggota3"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Anggota3'"
                                 class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Jurusan</h5>
                            <div class="mt-10">
                                <input type="text" name="jurusan" placeholder="Jurusan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jurusan'"
                                  class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Prodi</h5>
                            <div class="mt-10">
                                <input type="text" name="prodi"  placeholder="Prodi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prodi'"
                                  class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Dosen Pembimbing</h5>
                            <div class="mt-10">
                                <input type="text" name="dospem"  placeholder="Dospem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dospem'"
                                  class="single-input">
                            </div>
                            <br>
                            <h5 align="left">NIDN</h5>
                            <div class="mt-10">
                                <input type="text" name="nidn"  placeholder="NIDN" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIDN'"
                                  class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Penilaian</h5>
                            <div class="mt-10">
                            <div class="row left-content-center">
                            </div>
                            <br>
                            <div class="card align-items-center">
                                        <div class="card-body">
                                            <table class="table table-striped mt-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th >Kriteria</th>
                                                        <th >Bobot</th>
                                                        <th >Skor</th>
                                                        <th >Nilai (Bobot X Skor)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <h5 align="left">Deskripsi Bisnis</h5>
                                                                <h6 align="left">a. Bahan baku/sumber</h6>
                                                                <h6 align="left">b. Proses produksi</h6>
                                                                <h6 align="left">c. Mitra bisnis</h6>
                                                                
                                                        </td>
                                                        <td>
                                                            <h5>20%</h5>    
                                                        </td>
                                                        <td><input type="text" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <h5 align="left">Produk barang / jasa</h5>
                                                            <h6 align="left">a. Kreativitas</h6>
                                                            <h6 align="left">b. Inovasi</h6>                        
                                                        </td>
                                                        <td>
                                                            <h5>15%</h5>    
                                                        </td>
                                                        <td> <input type="text" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                           <h5 align="left">Pemasaran</h5>
                                                            <h6 align="left">a. Jangkauan Pasar</h6>
                                                            <h6 align="left">b. Strategi pemasaran</h6>                        
                                                        </td>
                                                        <td>
                                                            <h5>20%</h5>    
                                                        </td>
                                                        <td> <input type="text" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                           <h5 align="left">Pengelolaan Bisnis</h5>                        
                                                        </td>
                                                        <td>
                                                            <h5>10%</h5>    
                                                        </td>
                                                        <td> <input type="text" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                           <h5 align="left">Pengembangan Bisnis</h5>                        
                                                        </td>
                                                        <td>
                                                            <h5>15%</h5>    
                                                        </td>
                                                        <td> <input type="text" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>
                                                          <h5 align="left">Keuangan</h5>
                                                            <h6 align="left">a. Pemodalan</h6>
                                                            <h6 align="left">b. Arus Kas (Cash flow)</h6>                        
                                                        </td>
                                                        <td>
                                                            <h5>15%</h5>    
                                                        </td>
                                                        <td><input type="text" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"></td>
                                                        <td></td>
                                                    </tr>                                           
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            <br>
                            <h5 align="left">Hasil</h5>
                            <div class="mt-10">
                                <input type="text" name="hasil"  placeholder="Hasil" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hasil'"
                                  class="single-input">
                            </div>
                            <br>
                            <h5 align="left">Saran</h5>
                            <textarea class="single-textarea" name="komentar" placeholder="Saran" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Saran'"
                                 required></textarea>
                            <div class="justify-content-right" align="right"><button type="submit" class="genric-btn success circle">Simpan</button>
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