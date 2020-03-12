			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Data Proposal</h4>
							<div class="col-md-12">
								<div class="card">
															<div class="col-md-12">
								<div class="card card-tasks">
									<div class="card-header ">
										<h4 class="card-title" align="text-center">Data Proposal</h4>
									</div>
									<div class="card-body ">
										<div class="table-full-width">
											<table class="table" id="myTable">
												<thead>
													<tr>
														<th>No</th>
														<th>Judul Proposal</th>
														<th>Skema Bidang</th>
														<th>Nama Ketua</th>
														<th>Dosen Pembimbing</th>
														<th>Tanggal Upload</th>
														<th>File</th>
														<th>Review</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
												 <?php $no=1;foreach($proposal as $key){ ?>
													<tr>
														<td><?php echo $no ?></td>
														<td><?php echo $key->proposal_judul ?></td>
														<td><?php echo $key->skema_nama ?></td>
														<td><?php echo $key->peserta_nama ?></td>
														<td><?php echo $key->pembimbing_nama ?></td>
														<td><?php echo $key->proposal_tanggal_upload ?></td>
														<td><a href="<?php echo site_url().'assets/proposal/'.$key->proposal_file_name?>"><i class="la la-file"></i></a></td>
														<td><a href="<?php echo site_url().'Admin/lihat_review/'.$key->proposal_id?>"><button>Review</button></i></td>
														<td class="td-actions text-left">
															<div class="form-button-action">
															<?php if($key->proposal_status == "Belum Ada Reviewer"){ ?> 
																<button>Belum Ada Reviewer</button>
															<?php }else if($key->proposal_status == "Menunggu Review"){ ?>
																<button>Menunggu Review</button>
															<?php }else if($key->proposal_status == "Sudah Direview"){ ?>
																<button>Sudah diReview</button>
															<?php }else{ ?>
																<button>Error</button>
															<?php }?>
																<!-- <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
																	<i class="la la-times"></i>
																</button> -->
															</div>
														</td>
													</tr>
												 <?php $no++;} ?>
												</tbody>
											</table>
										</div>
										
									</div>
									<!-- <div class="card-footer ">
										<div class="stats">
											<a href="<?=site_url()?>/admin/tambah_mhs" class="btn btn-success" >Tambah Data</a>
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
<script src="<?php echo base_url()?>assets/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
<script>
	$(document).ready(function(){ 
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	});
</script>