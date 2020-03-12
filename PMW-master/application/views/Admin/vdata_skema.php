			
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Data Skema</h4>
							<div class="col-md-12">
								<div class="card card-tasks">
									<div class="card-header ">
										<h4 class="card-title" align="text-center">Data Skema</h4>
									</div>
									<div class="card-footer ">
										<div class="stats">
										<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Tambah</button>
										</div>
									</div>
									<div class="card-body ">
										<!-- <div class="table-full-width"> -->
										<table class="table mt-3" id="mytable">
										<thead>

											<tr>
											<th>No</th>
											<th>Nama Skema</th>
											<th>Jumlah</th>
											<th>Action</th>
											</tr>
										</thead>
										</table>
									</div>
								</div>
									
								     </div>
								 </form>
								</div>
								
							</div>
								</div>
							</div>
						</div>
	<!-- Modal Add Produk-->
	
		<form id="add-row-form" action="<?php echo base_url().'Admin/simpan_skema'?>" method="post">
			<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			           <div class="modal-content">
			               <div class="modal-header">
			                   <h4 class="modal-title" id="myModalLabel">Tambah Skema</h4>
							</div>
			               <div class="modal-body">
								<div class="form-group">
					               <input type="text" name="nama_skema_baru" class="form-control" placeholder="Nama Skema" required>
			                   </div>
					        </div>
			               <div class="modal-footer">
							  	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				              	<button type="submit" id="add-row" class="btn btn-success">Save</button>
			               </div>
						</div>
					</div>
				</div>
			</form>

	 <!-- Modal Update Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'Admin/update_skema'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <h4 class="modal-title" id="myModalLabel">Update Skema</h4>
 	               </div>
 	               <div class="modal-body">
 	                   <div class="form-group">
 	                       <input type="text" name="kode_skema" class="form-control" placeholder="Kode Skema" style="display:none">
 	                   </div>
 										 <div class="form-group">
 	                       <input type="text" name="nama_skema" class="form-control" placeholder="Nama Skema" required>
 	                   </div>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Update</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>

	 <!-- Modal Hapus Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'Admin/delete_skema'?>" method="post">
 	     <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <<!-- button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
 	                   <h4 class="modal-title" id="myModalLabel">Hapus Skema</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="hidden" name="kode_skema" class="form-control" placeholder="Kode Skema" required>
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
              ajax: {"url": "<?php echo base_url().'Admin/get_skema_json'?>", "type": "POST"},
                	columns: [

												{"data": "skema_id"},
												{"data": "skema_nama", "orderable" : false},
                        {"data": "jumlah_skema",
"searchable": false},
                        {"data": "view",
"searchable": false}
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
            var kode=$(this).data('kode');
						var nama=$(this).data('nama');
						var kode=$(this).data('id');
            $('#ModalUpdate').modal('show');
           				 $('[name="kode_skema"]').val(kode);
						 $('[name="nama_skema"]').val(nama);
      });
			// End Edit Records
			// get Hapus Records
			$('#mytable').on('click','.hapus_record',function(){
            var kode=$(this).data('id');
            $('#ModalHapus').modal('show');
            $('[name="kode_skema"]').val(kode);
      });
			// End Hapus Records

	});
</script>
