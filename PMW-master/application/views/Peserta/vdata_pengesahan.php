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
                        <h3 class="mb-30">Form Upload Proposal</h3>
                        <?php echo form_open_multipart('Peserta/kirim_proposal'); ?>
                            <h5 align="left">Judul</h5>
                            <div class="mt-10">
                                <textarea class="single-textarea" name="judul" placeholder="Judul" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'"
                                 required></textarea>
                            </div>
                            <br>
                            <h5 align="left">Skema Bidang </h5>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select"">
                                    <select name="skema">
                                            <option value="">Pilih Skema</option>
                                        <?php foreach ($skema->result() as $row) :?>
                                            <option value="<?php echo $row->skema_id;?>"><?php echo $row->skema_nama;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <!-- <br>
                            <h5 align="left">Jurusan</h5>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select"">
                                            <select>
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
                            </div>
                            <br>
                            <h5 align="left">Program Studi</h5>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select"">
                                            <select>
                                                <option value=" 1">Program Studi</option>
                                    <option value="1">D-III Teknik Elektronika</option>
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
                                    <option value="1">D-IV Teknik Informatika</option>
                                    </select>
                                </div>
                            </div> -->
                            <br>
                            <h5 align="left">Nama Ketua </h5>
                            <div class="mt-10">
                                <input type="text" name="ketua_id" value="<?php echo $identitas[0]->peserta_id?>" placeholder="Nama Ketua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ketua'"
                                class="single-input" style="display:none">
                                <input type="text" name="nama_ketua" value="<?php echo $identitas[0]->peserta_nama?>" placeholder="Nama Ketua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ketua'"
                                class="single-input" disabled>
                                </div>
                                <br>
                            <h5 align="left">Jurusan </h5>
                            <div class="mt-10">
                                <input type="text" name="nama_ketua" value="<?php echo $identitas[0]->jurusan_nama?>" placeholder="Nama Ketua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ketua'"
                                class="single-input" disabled>
                                </div>
                                <br>
                            <h5 align="left">Prodi </h5>
                            <div class="mt-10">
                                <input type="text" name="nama_ketua" value="<?php echo $identitas[0]->prodi_nama?>" placeholder="Nama Ketua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ketua'"
                                class="single-input" disabled>
                            </div>
                            <br>
                            <!-- <h5 align="left">NIM</h5>
                            </div>
                            <div class="mt-10">
                                <input type="text" name="nim" value="<?php echo $identitas[0]->peserta_nim?>" placeholder="NIM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'"
                                class="single-input">
                            </div>
                            <br> -->
                            <h5 align="left">Dosen Pembimbing</h5>
                            <div class="mt-10">
                                 <div class="form-select" id="default-select"">
                                    <select name="pembimbing">
                                            <option value="">Pilih Dosen Pembimbing</option>
                                        <?php foreach ($pembimbing as $key) :?>
                                            <option value="<?php echo $key->pembimbing_id;?>"><?php echo $key->pembimbing_nama;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <!-- <h5 align="left">NIP</h5>
                            <div class="mt-10">
                                <input type="text" name="nip" placeholder="NIP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIP'"
                                 required class="single-input">
                            </div> -->
                            <br>
                            <h5 align="left">File Proposal</h5>
                            <div class="mt-10">
                            <p>File Proposal Harus berformat PDF dan Nama File Sesuai Judul</p>   
                                <input type="file" name="proposal">
                            </div>
                            <br>
                            <h5 align="left">Anggota</h5>
                            <div class="card align-items-center">
                                        <div class="card-body">
                                            <table id="tabel_anggota" class="table table-striped mt-3">
                                                <thead>
                                                    <tr>
                                                        <th >NIM</th>
                                                        <th >Nama Anggota</th>
                                                        <th >Jurusan</th>
                                                        <th >Prodi</th>
                                                        <th >No Handphone</th>
                                                        <th >Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="body_anggota">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                             
                             <div class="justify-content-left" align="left"><br><button type="button" id="tambahAnggota" class="btn_1 ">Tambah Anggota</button>
                            </div>
                           
                            <br>
                            <div class="form-group">
                                <input type="text" name="nim_anggota_array[]" id="nim_anggota_array1"  style="display:none">
                                    <input type="text" name="nama_anggota_array[]" id="nama_anggota_array1"  style="display:none" >
                                    <input type="text" name="jurusan_anggota_array[]" id="jurusan_anggota_array1"  style="display:none">
                                    <input type="text" name="prodi_anggota_array[]" id="prodi_anggota_array1"  style="display:none">
                                    <input type="text" name="no_hape_anggota_array[]" id="no_hape_anggota_array1"  style="display:none">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="nim_anggota_array[]" id="nim_anggota_array2"  style="display:none">
                                    <input type="text" name="nama_anggota_array[]" id="nama_anggota_array2"  style="display:none">
                                    <input type="text" name="jurusan_anggota_array[]" id="jurusan_anggota_array2"  style="display:none">
                                    <input type="text" name="prodi_anggota_array[]" id="prodi_anggota_array2"  style="display:none">
                                    <input type="text" name="no_hape_anggota_array[]" id="no_hape_anggota_array2"  style="display:none">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="nim_anggota_array[]" id="nim_anggota_array3"  style="display:none">
                                    <input type="text" name="nama_anggota_array[]" id="nama_anggota_array3"  style="display:none">
                                    <input type="text" name="jurusan_anggota_array[]" id="jurusan_anggota_array3"  style="display:none">
                                    <input type="text" name="prodi_anggota_array[]" id="prodi_anggota_array3"  style="display:none">
                                    <input type="text" name="no_hape_anggota_array[]" id="no_hape_anggota_array3"  style="display:none">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nim_anggota_array[]" id="nim_anggota_array4"  style="display:none">
                                    <input type="text" name="nama_anggota_array[]" id="nama_anggota_array4"  style="display:none">
                                    <input type="text" name="jurusan_anggota_array[]" id="jurusan_anggota_array4"  style="display:none">
                                    <input type="text" name="prodi_anggota_array[]" id="prodi_anggota_array4"  style="display:none">
                                    <input type="text" name="no_hape_anggota_array[]" id="no_hape_anggota_array4"  style="display:none">
                            </div>
                            <br>
                            <div class="justify-content-right" align="right"><button type="submit" class="genric-btn success circle">Simpan</button>
                            <?php echo form_close() ?>
                                <a href="<?php echo site_url().'Peserta/index'?>" class="genric-btn danger circle">Batal</a></div>
    
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			           <div class="modal-content">
			               <div class="modal-header">
			                   <h4 class="modal-title" id="myModalLabel">Tambah Anggota</h4>
							</div>
			               <div class="modal-body">
								<div class="form-group">
                                   <input type="text" name="nim_anggota" id="nim_anggota" placeholder="Masukkan NIM Anggota Terlebih Dahulu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan NIM Anggota Terlebih Dahulu'"
                                  class="single-input"> 
                                  <br>  
                                  <input type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama Anggota" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Anggota'"
                                  class="single-input">
                                  <br> 
                                  <div class="form-select">
                                    <select  name="jurusan_anggota" id="jurusan_anggota">
                                        <option value="">Pilih Jurusan</option>
                                        <?php foreach ($jurusan as $key) :?>
                                            <option value="<?php echo $key->jurusan_id;?>"><?php echo $key->jurusan_nama;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-select" id="default-select">
                                            <select name="prodi" class="form-control input-solid" id="prodi_anggota">
                                                <option value="">Pilih Jurusan Terlebih Dahulu</option>
                                            </select>
                                </div>
                                <br>  
                                  <input type="text" name="no_hape_anggota" id="no_hape_anggota" placeholder="Nomor Handphone Anggota" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Handphone Anggota'"
                                  class="single-input">
                                  <br> 
                                </div>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
				              	<button type="submit" id="add_anggota" class="btn btn-success">Tambah</button>
			                   </div>
					        </div>
			               <div class="modal-footer">
							  	
			               </div>
						</div>
		</div>
	</div>

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
    <script type="text/javascript">
    
          $(document).ready(function(){

            $( "#tambahAnggota" ).click(function() {
                $('#myModalAdd').modal('show');
            });

            // $( "#jurusan_anggota" ).change(function() {
            //     // alert($(this).val());
            //     $(this).val("1");
            //     $('select').niceSelect('update');
            // });

            $('#nim_anggota').change(function(){ 
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
                        $('#nama_anggota').val("");
                        $('#no_hape_anggota').val("");
                        // $('#jurusan_anggota').val("");
                        // $('#prodi_anggota').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
                        // $('#prodi_anggota').val("");
                        $('#no_hape_anggota').val("");
                    }
                    else{
                        $('#nama_anggota').val(data[0].namaMhs);
                        $('#no_hape_anggota').val(data[0].tlpMhs);
                        
                        $("#jurusan_anggota option:contains(" + data[0].nmJurusan + ")").attr('selected', 'selected');
                        var id=$('#jurusan_anggota').val();
                        $('#prodi_anggota').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
            
                        $.ajax({
                            url : "<?php echo base_url();?>Login/get_prodi",
                            method : "POST",
                            data : {id: id},
                            async : false,
                            dataType : 'json',
                            success: function(data){
                                // console.log(data);
                                for (let index = 0; index < data.length; index++) {
                                    $("#prodi_anggota").append("<option value="+data[index].prodi_id+">"+data[index].prodi_nama+"</option>");
                                }
                            }
                        });

                        $("#prodi_anggota option:contains(" + data[0].namaProdi + ")").attr('selected', 'selected');
                        $('select').niceSelect('update');
                    }
				}
			});
            }
            else if(status_ketua == "Ada" || status_anggota == "Ada"){
                alert("NIM Sudah Terdaftar");
                // $('#nim').val("");
                $('#nama_anggota').val(data[0].namaMhs);
                $('#no_hape_anggota').val(data[0].tlpMhs);
                // $('#jurusan_select').val("");
                 // $('#prodi_select').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
                // $('#prodi_select').val("");
            }
        });

            $( "#add_anggota" ).click(function() {
                var nim = $("#nim_anggota"). val();
				var nama = $("#nama_anggota").val();
                var jurusan = $("#jurusan_anggota").val();
                var jurusantext = $("#jurusan_anggota option:selected").text();
                var prodi = $("#prodi_anggota").val();
                var proditext = $("#prodi_anggota option:selected").text();
                var no_hape = $("#no_hape_anggota").val();
                // console.log(nim);
                // console.log(nama);
                // console.log(jurusan);
                // console.log(jurusantext);
                // console.log(prodi);
                // console.log(proditext);
                // console.log(no_hape);
                if( (nim == "") || (nama == "") || (jurusan)=="" || (prodi)=="" || (no_hape) ==""){
                    alert("Isi Data Anggota Dengan Benar");
                }
                else{
                    var rowCount = $('#tabel_anggota >tbody >tr').length;
                    row = "<tr id='row_"+(rowCount+1)+"'><td>"+nim+"</td><td>"+nama+"</td><td>"+jurusantext+"</td><td>"+proditext+"</td><td>"+no_hape+"</td><td><button data-id='"+(rowCount+1)+"' class='row_anggota'>Hapus</button></td></tr>"
                    tableBody = $("#body_anggota")
                    tableBody.append(row);
                    // alert(rowCount);
                    $("#nim_anggota_array"+(rowCount+1)). val(nim);
                    $("#nama_anggota_array"+(rowCount+1)).val(nama);
                    $("#jurusan_anggota_array"+(rowCount+1)).val(jurusan);
                    $("#prodi_anggota_array"+(rowCount+1)).val(prodi);
                    $("#no_hape_anggota_array"+(rowCount+1)).val(no_hape);
                    $("#nim_anggota"). val("");
                    $("#nama_anggota").val("");
                    // $("#jurusan_anggota option:contains('Pilih Jurusan')").attr('selected', 'selected');
                    // $("#prodi_anggota option:contains('Pilih Jurusan Terlebih Dahulu')").attr('selected', 'selected');
                    // $('select').niceSelect('update');
                    $("#no_hape_anggota").val("");
                    $('#myModalAdd').modal('hide');
                }
            });

            $('#jurusan_anggota').change(function(){
			var id=$(this).val();
            $('#prodi_anggota').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
            
            $.ajax({
				url : "<?php echo base_url();?>Login/get_prodi",
				method : "POST",
				data : {id: id},
				async : false,
		        dataType : 'json',
				success: function(data){
					// console.log(data);
                    for (let index = 0; index < data.length; index++) {
                        $("#prodi_anggota").append("<option value="+data[index].prodi_id+">"+data[index].prodi_nama+"</option>");
                    }
                    $('select').niceSelect('update');
				}
			});
		});

            $(document).on('click', '.row_anggota', function () {
                var id = $(this).data('id');
                $("#row_"+id).remove();
                $("#nim_anggota_array"+id). val("");
                $("#nama_anggota_array"+id).val("");
                $("#jurusan_anggota_array"+id).val("");
                $("#prodi_anggota_array"+id).val("");
                $("#no_hape_anggota_array"+id).val("");
            });
          });
        </script>
</body>

</html>