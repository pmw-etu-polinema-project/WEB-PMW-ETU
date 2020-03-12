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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/style.css">
    <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/assets/css/ready.css">
    <link rel="stylesheet" href="assets/assets/css/demo.css">
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
                        <br>
                        <br>
                        <img src="<?php echo base_url()?>assets/img/logo1.png" alt="">
                         <br> 
                         <br><h5>Isi data dengan benar</h5>
                         <?php echo form_open('Login/daftar_peserta'); ?>
                            <div class="form-group">
                                <input type="text" name="nim" id="nim" class="form-control input-solid" placeholder="Isi NIM Terlebih Dahulu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'"
                                 required class="single-input">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" id="username" class="form-control input-solid" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"
                                 required class="single-input">
                            </div>
                            <div class="form-group">
                                <input type="text" name="no_hape" id="no_hape" class="form-control input-solid" placeholder="No Handphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"
                                 required class="single-input">
                            </div>
                            <div class="form-group">
                                <!-- <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div> -->
                                <div class="form-select" id="default-select">
                                    <select  name="jurusan" class="form-control input-solid" id="jurusan_select">
                                        <option value="">Pilih Jurusan</option>
                                        <?php foreach ($jurusan->result() as $row) :?>
                                            <option value="<?php echo $row->jurusan_id;?>"><?php echo $row->jurusan_nama;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                            <select name="prodi" class="form-control input-solid" id="prodi_select">
                                                <option value="">Pilih Jurusan Terlebih Dahulu</option>
                                    <!-- <option value="1">D-III Teknik Elektronika</option>
                                    <option value="1">D-III Teknik Listrik Industri</option>
                                    <option value="1">D-III Teknik Telekomunikasi</option>
                                    <option value="1">D-III TEKNIK MESIN</option>
                                    <option value="1">D-III Teknik Sipil</option>
                                    <option value="1">D-III Teknologi Konstruksi Jalan, Jembatan, dan Bangunan Air (TKJJBA)</option>
                                    <option value="1">D-III TEKNIK KIMIA</option>
                                    <option value="1">D-III Akuntansi</option>
                                    <option value="1">D-III Administrasi Bisnis</option>
                                    <option value="1">D-III Bahasa Inggris</option>
                                    <option value="1">D-III Manajemen Informatika</option>
                                    <option value="1">D-IV Teknik Elektronika</option>
                                    <option value="1">D-IV Sistem Kelistrikan</option>
                                    <option value="1">D-IV Jaringan Telekomunikasi Digital</option>
                                    <option value="1">D-IV D-IV TEKNIK MESIN PRODUKSI DAN PERAWATAN </option>
                                    <option value="1">D-IV Teknik Otomotif Elektonik</option>
                                    <option value="1">D-IV Manajemen Rekayasa Konstruksi</option>
                                    <option value="1">D-IV TEKNIK KIMIA INDUSTRI</option>
                                    <option value="1">D-IV Akuntansi Manajeman</option>
                                    <option value="1">D-IV Keuangan</option>
                                    <option value="1">D-IV Manajemen Pemasaran</option>
                                    <option value="1">D-IV Teknik Informatika</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="mt-10">
                                <input type="Password" name="password" class="form-control input-solid" placeholder="Password Minimal 8 Huruf/Angka" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password Minimal 8 Huruf/Angka'"
                                 required class="single-input">
                            </div>
                            <br>
                            <div class="mt-10">
                                <input type="Password" name="ulangi_password" class="form-control input-solid" placeholder="Ulangi Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                                 required class="single-input">
                            </div>
                            
                            <br>
                            <div class="justify-content-center">
                            <p style="color:red;"><?php echo validation_errors()?></p>
                            <button type="submit" class="btn btn-primary btn-round" id="btnSimpan">Buat</button>
                            <?php echo form_close(); ?>
                                <a href="<?php echo site_url().'welcome'?>" class="btn btn-danger btn-round">Kembali</a></div>
                            <div class="justify-content-center"></div>
                            <br><h6>Sudah punya akun, Masuk sekarang</h6>
                             <div class="justify-content-center"><a href="<?php echo site_url().'login'?>" class="btn btn-success btn-border btn-round">Masuk</a></div>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url()?>assets/assets/js/core/jquery.3.2.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#jurusan_select').change(function(){
			var id=$(this).val();
            $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
            
            $.ajax({
				url : "<?php echo base_url();?>Login/get_prodi",
				method : "POST",
				data : {id: id},
				async : false,
		        dataType : 'json',
				success: function(data){
					// console.log(data);
                    for (let index = 0; index < data.length; index++) {
                        $("#prodi_select").append("<option value="+data[index].prodi_id+">"+data[index].prodi_nama+"</option>");
                    }
				}
			});
		});

        $('#nim').change(function(){ 
            var nim=$(this).val();
            var username=$(this).val();
            var status_ketua = "";
            var status_anggota = "";

            $.ajax({
				url : "<?php echo base_url();?>Login/cek_username",
				method : "POST",
				data : {username: username},
				async : false,
		        dataType : 'json',
				success: function(data){
					// console.log(data);
                    if(data == "Sudah Ada"){
                        status_ketua = "Ada";
                    }
                    else if(data == "Belum Ada"){
                        status_ketua = "Belum Ada";
                    }
				}
			});

            $.ajax({
				url : "<?php echo base_url();?>Login/cek_anggota",
				method : "POST",
				data : {username: username},
				async : false,
		        dataType : 'json',
				success: function(data){
					// console.log(data);
                    if(data == "Sudah Ada"){
                        status_anggota = "Ada";
                    }
                    else if(data == "Belum Ada"){
                        status_anggota = "Belum Ada";
                    }
				}
			});

            // console.log(status_anggota, status_ketua);

            if(status_ketua == "Belum Ada" && status_anggota == "Belum Ada"){
                $.ajax({
				url : "<?php echo base_url();?>Login/get_data_mahasiswa",
				method : "POST",
				data : {nim: nim},
				async : false,
		        dataType : 'json',
				success: function(data){
					// console.log(data);

                    if(data.length == 0){
                        alert("NIM tidak terdaftar silahkan hubungi admin.");
                        $('#username').val("");
                        $('#no_hape').val("");
                        $('#jurusan_select').val("");
                        $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
                        $('#prodi_select').val("");
                    }
                    else{
                        $('#username').val(data[0].namaMhs);
                        $('#no_hape').val(data[0].tlpMhs);
                        // $('#jurusan_select').text(data[0].nmJurusan);
                        // alert(data[0].nmJurusan);

                        $("#jurusan_select option:contains(" + data[0].nmJurusan + ")").attr('selected', 'selected');

                        var id=$('#jurusan_select').val();
                        $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
                        
                        $.ajax({
                            url : "<?php echo base_url();?>Login/get_prodi",
                            method : "POST",
                            data : {id: id},
                            async : false,
                            dataType : 'json',
                            success: function(data){
                                // console.log(data);
                                for (let index = 0; index < data.length; index++) {
                                    $("#prodi_select").append("<option value="+data[index].prodi_id+">"+data[index].prodi_nama+"</option>");
                                }
                            }
                        });

                        $("#prodi_select option:contains(" + data[0].namaProdi + ")").attr('selected', 'selected');
                        $("#btnSimpan").attr("disabled", false);
                    }
                    
				}
			});
            }
            else if(status_ketua == "Ada" || status_anggota == "Ada"){
                alert("NIM Sudah Terdaftar");
                // $('#nim').val("");
                $('#username').val("");
                $('#no_hape').val("");
                // $('#jurusan_select').val("");
                 // $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
                // $('#prodi_select').val("");
                $("#btnSimpan").attr("disabled", true);
            }

           
        });

        // $('#nim').change(function(){ 
        //     var username=$(this).val();
        //     $.ajax({
		// 		url : "<?php echo base_url();?>Login/cek_username",
		// 		method : "POST",
		// 		data : {username: username},
		// 		async : false,
		//         dataType : 'json',
		// 		success: function(data){
		// 			// console.log(data);
        //             if(data == "Sudah Ada"){
        //                 alert("NIM Sudah Terdaftar");
        //                 $('#username').val("");
        //                 $('#no_hape').val("");
        //                 // $('#jurusan_select').val("");
        //                 // $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
        //                 // $('#prodi_select').val("");
        //                 $("#btnSimpan").attr("disabled", true);
        //             }
        //             else if(data == "Belum Ada"){
        //                 $("#btnSimpan").attr("disabled", false);
        //             }
		// 		}
		// 	});

        //     $.ajax({
		// 		url : "<?php echo base_url();?>Login/cek_anggota",
		// 		method : "POST",
		// 		data : {username: username},
		// 		async : false,
		//         dataType : 'json',
		// 		success: function(data){
		// 			// console.log(data);
        //             if(data == "Sudah Ada"){
        //                 alert("NIM Sudah Terdaftar sebagai Anggota");
        //                 $('#username').val("");
        //                 $('#no_hape').val("");
        //                 // $('#jurusan_select').val("");
        //                 // $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
        //                 // $('#prodi_select').val("");
        //                 $("#btnSimpan").attr("disabled", true);
        //             }
        //             else if(data == "Belum Ada"){
        //                 $("#btnSimpan").attr("disabled", false);
        //             }
		// 		}
		// 	});
        // });
    });
    </script>
</body>

</html>