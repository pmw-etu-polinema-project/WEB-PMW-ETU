<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Data Peserta</h4>
							<div class="col-md-12">
								<div class="card card-tasks">
									<div class="card-header ">
										<h4 class="card-title" align="text-center">Data Peserta</h4>
									</div>
									<div class="card-footer ">
										<!-- <div class="stats">
										<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Tambah</button>
										</div> -->
									</div>
									<div class="card-body ">
										<!-- <div class="table-full-width"> -->
											<table class="table" id="mytable">
												<thead>
													<tr>
														<th>No</th>
														<th>NIM Peserta</th>
														<th>Nama</th>
														<th>No Handphone</th>
														<th>Password</th>
														<th>Jurusan</th>
														<th>Prodi</th>
														<th>Action</th>
													</tr>
												</thead>
												<!-- <tbody>
													<tr>
														<td>1</td>
														<td>Dika Rizky Yunianto</td>
														<td>Teknologi Informasi</td>
														<td>0381318713</td>
														<td class="td-actions text-left">
															<div class="form-button-action">
																<button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link <btn-simple-primary">
																	<i class="la la-edit"></i>
																</button>
																<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
																	<i class="la la-times"></i>
																</button>
															</div>
														</td>
													</tr>
												</tbody> -->
											</table>
										</div>
										
									</div>
									<!-- <div class="card-footer ">
										<div class="stats">
											<a href="<?=site_url()?>/admin/tambah_reviewer" class="btn btn-success" >Tambah Data</a>
										</div>
									</div> -->
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
	<!-- Modal Add Produk-->
	<form id="add-row-form" action="<?php echo base_url().'Admin/simpan_reviewer'?>" method="post">
	     <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	           <div class="modal-content">
	               <div class="modal-header">
	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                   <h4 class="modal-title" id="myModalLabel">Tambah Data Reviewer</h4>
	               </div>
	               <div class="modal-body">
						<div class="form-group">
	                       <input type="text" name="nama_reviewer_baru" class="form-control" placeholder="Nama Dosen" required>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="nip_reviewer_baru" class="form-control" placeholder="NIP" required>
	                   </div>
					   <div class="form-group">
	                       <select name="jurusan_reviewer_baru" class="form-control" placeholder="Jurusan" required>
								<?php foreach ($jurusan->result() as $row) :?>
									<option value="<?php echo $row->jurusan_id;?>"><?php echo $row->jurusan_nama;?></option>
								<?php endforeach;?>
							</select>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="password_reviewer_baru" class="form-control" placeholder="Password" required>
	                   </div>
	               </div>
	               <div class="modal-footer">
	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                  	<button type="submit" id="add-row" class="btn btn-success">Save</button>
	               </div>
	      			</div>
	        </div>
	     </div>
	 </form>

	 <!-- Modal Update Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'Admin/update_peserta'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Update Data Peserta</h4>
 	               </div>
 	               <div class="modal-body">
						<div class="form-group">
	                       <input type="text" name="id_peserta" class="form-control" style="display:none">
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="nim_peserta" class="form-control" placeholder="NIM Peserta" disabled>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta" required>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="no_hp_peserta" class="form-control" placeholder="No Handphone Peserta" required>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="login_peserta" class="form-control" style="display:none">
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="password_peserta" class="form-control" placeholder="Password Peserta" required>
	                   </div>
					   <div class="form-group">
	                       <select name="jurusan_peserta" class="form-control" placeholder="Jurusan" required>
								<?php foreach ($jurusan->result() as $row) :?>
									<option value="<?php echo $row->jurusan_id;?>"><?php echo $row->jurusan_nama;?></option>
								<?php endforeach;?>
							</select>
	                   </div>
					   <div class="form-group">
	                       <select name="prodi_peserta" class="form-control" placeholder="Prodi" required>
							</select>
	                   </div>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Update</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>

	 <!-- Modal Hapus Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'Admin/delete_peserta'?>" method="post">
 	     <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Hapus Data Peserta</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="text" name="id_peserta" class="form-control" required style="display:none">
						   <input type="text" name="login_peserta" class="form-control" required style="display:none">
												 <strong>Anda yakin mau menghapus data ini?</strong>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Hapus</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>
<script src="<?php echo base_url()?>assets/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
<script>
	$(document).ready(function(){

		$('[name="jurusan_peserta"]').change(function(){
			var id=$(this).val();
			$('[name="prodi_peserta"]').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
            
            $.ajax({
				url : "<?php echo base_url();?>Login/get_prodi",
				method : "POST",
				data : {id: id},
				async : false,
		        dataType : 'json',
				success: function(data){
					// console.log(data);
                    for (let index = 0; index < data.length; index++) {
						$('[name="prodi_peserta"]').append("<option value="+data[index].prodi_id+">"+data[index].prodi_nama+"</option>");
                    }
				}
			});
		});
		// Setup datatables
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };

      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'Admin/get_peserta_json'?>", "type": "POST"},
                	columns: [
						{"data": "peserta_id"},
						{"data": "peserta_nim"},
						{"data": "peserta_nama"},
						{"data": "peserta_no_hp"},
						{"data": "login_password","searchable": false,"orderable" : false},
						{"data": "jurusan_nama"},
						{"data": "prodi_nama"},
                        {"data": "view","searchable": false,"orderable" : false}
                  ],
          		order: [[1, 'asc']],
				  rowCallback: function(row, data, iDisplayIndex) {
						var info = this.fnPagingInfo();
						var page = info.iPage;
						var length = info.iLength;
						var index = page * length + (iDisplayIndex + 1);
					$('td:eq(0)', row).html(index);
					}

      });
			// end setup datatables
			// get Edit Records
			$('#mytable').on('click','.edit_record',function(){
						var id=$(this).data('id');
						var nim = $(this).data('nim');
						var nama=$(this).data('nama');
						var no_hp=$(this).data('nohp');
						var jurusan=$(this).data('jurusan');
						var prodi=$(this).data('prodi');
						var login = $(this).data('login')
						var password = $(this).data('password');

						$('[name="prodi_peserta"]').empty().append('<option selected="selected" value="">Pilih Prodi</option>');
                        
                        $.ajax({
                            url : "<?php echo base_url();?>Login/get_prodi",
                            method : "POST",
                            data : {id: id},
                            async : false,
                            dataType : 'json',
                            success: function(data){
                                // console.log(data);
                                for (let index = 0; index < data.length; index++) {
                                    $('[name="prodi_peserta"]').append("<option value="+data[index].prodi_id+">"+data[index].prodi_nama+"</option>");
                                }
                            }
                        });

            			 $('#ModalUpdate').modal('show');
           				 $('[name="id_peserta"]').val(id);
						 $('[name="nim_peserta"]').val(nim);
						 $('[name="nama_peserta"]').val(nama);
						 $('[name="no_hp_peserta"]').val(no_hp);
						 $('[name="jurusan_peserta"]').val(jurusan);
						 $('[name="prodi_peserta"]').val(prodi);
						 $('[name="login_peserta"]').val(login);
						 $('[name="password_peserta"]').val(password);
      		});
			// End Edit Records
			// get Hapus Records
			$('#mytable').on('click','.hapus_record',function(){
            var id=$(this).data('id');
			var login=$(this).data('login');
            $('#ModalHapus').modal('show');
            $('[name="id_peserta"]').val(id);
			$('[name="login_peserta"]').val(login);
      });
	// 		// End Hapus Records
	});
</script>