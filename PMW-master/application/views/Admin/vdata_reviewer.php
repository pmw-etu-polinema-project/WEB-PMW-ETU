			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Data Reviewer</h4>
							<div class="col-md-12">
								<div class="card card-tasks">
									<div class="card-header ">
										<h4 class="card-title" align="text-center">Data Reviewer</h4>
									</div>
									<div class="card-footer ">
										<div class="stats">
										<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Tambah</button>
										</div>
									</div>
									<div class="card-body ">
										<!-- <div class="table-full-width"> -->
											<table class="table" id="mytable">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Dosen</th>
														<th>NIP</th>
														<th>Jurusan</th>
														<th>Password</th>
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
 	  <form id="add-row-form" action="<?php echo base_url().'Admin/update_reviewer'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Update Data Reviewer</h4>
 	               </div>
 	               <div class="modal-body">
						<div class="form-group">
	                       <input type="text" name="id_reviewer" class="form-control" style="display:none">
	                   </div>
						<div class="form-group">
	                       <input type="text" name="nama_reviewer" class="form-control" placeholder="Nama Dosen" required>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="nip_reviewer" class="form-control" placeholder="NIP" required>
	                   </div>
					   <div class="form-group">
	                       <select name="jurusan_reviewer" class="form-control" placeholder="Jurusan" required>
								<?php foreach ($jurusan->result() as $row) :?>
									<option value="<?php echo $row->jurusan_id;?>"><?php echo $row->jurusan_nama;?></option>
								<?php endforeach;?>
							</select>
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="login_reviewer" class="form-control" style="display:none">
	                   </div>
					   <div class="form-group">
	                       <input type="text" name="password_reviewer" class="form-control" placeholder="Password" required>
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
 	  <form id="add-row-form" action="<?php echo base_url().'Admin/delete_reviewer'?>" method="post">
 	     <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Hapus Data Reviewer</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="text" name="id_reviewer" class="form-control" required>
						   <input type="text" name="login_reviewer" class="form-control" required>
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
              ajax: {"url": "<?php echo base_url().'Admin/get_reviewer_json'?>", "type": "POST"},
                	columns: [
						{"data": "reviewer_id"},
						{"data": "reviewer_nama", "orderable" : false},
                        {"data": "reviewer_nip"},
						{"data": "jurusan_nama"},
						{"data": "login_password","searchable": false,"orderable" : false},
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
						var nama=$(this).data('nama');
						var nip=$(this).data('nip');
						var jurusan=$(this).data('jurusan');
						var login = $(this).data('login')
						var password = $(this).data('password');
            $('#ModalUpdate').modal('show');
           				 $('[name="id_reviewer"]').val(id);
						 $('[name="nama_reviewer"]').val(nama);
						 $('[name="nip_reviewer"]').val(nip);
						 $('[name="jurusan_reviewer"]').val(jurusan);
						 $('[name="login_reviewer"]').val(login);
						 $('[name="password_reviewer"]').val(password);
      });
			// End Edit Records
			// get Hapus Records
			$('#mytable').on('click','.hapus_record',function(){
            var id=$(this).data('id');
			var login=$(this).data('login');
            $('#ModalHapus').modal('show');
            $('[name="id_reviewer"]').val(id);
			$('[name="login_reviewer"]').val(login);
      });
	// 		// End Hapus Records
	});
</script>