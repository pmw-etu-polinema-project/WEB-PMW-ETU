<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Data Review</h4>
							<div class="col-md-12">
								<div class="card">
								<div class="col-md-12">
								<div class="card card-tasks">
									<div class="card-header ">
										<h4 class="card-title" align="text-center">Reviewer</h4>
									</div>
									<div class="card-body ">
                                    <?php echo form_open('Admin/pilih_reviewer');  ?>
										<div class="table-full-width">
                                        <input type="text" name="proposal_id" value="<?php echo $proposal[0]->proposal_id?>" style="display:none">
										<h5 class="card-title" align="text-center">Reviewer 1</h5>
                                                <select  name="reviewer_1" id="reviewer_1">
                                                    <option value="">Pilih Reviewer</option>
                                                    <?php foreach ($reviewer as $row) :?>
                                                        <option value="<?php echo $row->reviewer_id;?>"><?php echo $row->reviewer_nama;?></option>
                                                    <?php endforeach;?>
                                                </select>

										<h5 class="card-title" align="text-center">Reviewer 2</h5>
                                                <select  name="reviewer_2" id="reviewer_2">
                                                    <option value="">Pilih Reviewer</option>
                                                    <?php foreach ($reviewer as $row) :?>
                                                        <option value="<?php echo $row->reviewer_id;?>"><?php echo $row->reviewer_nama;?></option>
                                                    <?php endforeach;?>
                                                </select>

										<h5 class="card-title" align="text-center">Reviewer 3</h5>
                                                <select  name="reviewer_3" id="reviewer_3">
                                                    <option value="">Pilih Reviewer</option>
                                                    <?php foreach ($reviewer as $row) :?>
                                                        <option value="<?php echo $row->reviewer_id;?>"><?php echo $row->reviewer_nama;?></option>
                                                    <?php endforeach;?>
                                                </select>
										</div>
                                        <br>
                                        <button type="submit" class="btn btn-success" id="btnReviewer">Pilih</a>
                                    <?php echo form_close()?>
									</div>

                                    <div class="card-header ">
										<h4 class="card-title" align="text-center">Reviewer</h4>
									</div>
									<div class="card-body ">
										<div class="table-full-width">
											<table class="table" id="myTable">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Ketua</th>
														<th>Judul Proposal</th>
													</tr>
												</thead>
												<tbody>
												 
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
		var data1 = <?php echo $proposal[0]->proposal_reviewer_1_id ?>;
		var data2 = <?php echo $proposal[0]->proposal_reviewer_2_id ?>;
		var data3 = <?php echo $proposal[0]->proposal_reviewer_3_id ?>;
        if(data1 != "" || data2 != "" || data3 != ""){
            $('#reviewer_1').val(data1);
			$('#reviewer_2').val(data2);
			$('#reviewer_3').val(data3);
            $('#btnReviewer').text("Update");
        }
	});
</script>