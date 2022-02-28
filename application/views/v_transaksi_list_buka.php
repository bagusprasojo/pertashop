<?php $this->load->view("_partials/head.php") ?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php $this->load->view("_partials/navigation.php") ?>
	  <div class="card-header">
			<?php $this->load->view("_partials/breadcrumb.php") ?>
		</div>
			
	  
      <!-- DataTables -->
				
					<div class="card-header">
						<a href="<?php echo site_url('buka/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('buka/index/'); ?>" method="post">
							<p>
								Periode
								<input	type="date" name="tanggal1" value="<?php echo $tanggal1?>" /> s.d. 
								<input	type="date" name="tanggal2" value="<?php echo $tanggal2?>"/>
								<input	type="hidden" name="user_id" value="<?$_SESSION['user_logged']->user_id?>"/>
						
								<input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead align="center">
									<tr>
										<th rowspan="2">No</th>
										<th rowspan="2">Tanggal</th>
										<th colspan="2">Buka / Tutup</th>
										<th colspan="3">Meteran Depan</th>
										<th colspan="3">Meteran Digital</th>
										<th colspan="3">Deep Stick</th>
										<th rowspan="2">Action</th>
										
									</tr>
                  <tr>
                    <th>Buka</th>
										<th>Tutup</th>
										<th>Mulai</th>
										<th>Tutup</th>
										<th>Total</th>
                    <th>Mulai</th>
										<th>Tutup</th>
										<th>Total</th>
                    <th>Mulai</th>
										<th>Tutup</th>
										<th>Total</th>
                    
										
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($transaksis as $transaksi): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										
										<td width="100">
											<?php echo $transaksi->tanggal ?>
										</td>
										<td width="60">
											<?php echo date("H:i", strtotime($transaksi->buka)) ?>
										</td>
										<td width="60">
											<?php echo date("H:i", strtotime($transaksi->tutup)) ?>
										</td>
										
										<td>
											<?php echo $transaksi->depan_buka ?>
										</td>
										<td>
											<?php echo $transaksi->depan_tutup ?>
										</td>
										<td>
											<?php echo $transaksi->depan_buka - $transaksi->depan_tutup?>
										</td>
										
										<td>
											<?php echo $transaksi->digital_buka ?>
										</td>
										<td>
											<?php echo $transaksi->digital_tutup ?>
										</td>
										<td>
											<?php echo $transaksi->digital_buka - $transaksi->digital_tutup?>
										</td>

										<td>
											<?php echo $transaksi->deep_stick_buka ?>
										</td>
										<td>
											<?php echo $transaksi->deep_stick_tutup ?>
										</td>
										<td>
											<?php echo $transaksi->deep_stick_buka - $transaksi->deep_stick_tutup?>
										</td>
										
										



										<td width="250">
											<a href="<?php echo site_url('buka/edit/'.$transaksi->transaksi_id . "/0") ?> "
												class="btn btn-primary">Edit</a>	
											
											<a onclick="deleteConfirm('<?php echo site_url('buka/delete/'.$transaksi->transaksi_id) ?>')"
												href="#!" class="btn btn-danger">Hapus</a>

												<a href="<?php echo site_url('buka/edit/'.$transaksi->transaksi_id . "/1") ?> "
												class="btn btn-primary">Tutup</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							</form>
							<br/>
							<?php 
							echo $pagination;
							?>
						</div>
				</div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/scrolltop.php") ?>
  <?php $this->load->view("_partials/footer.php") ?>
  <?php $this->load->view("_partials/modal.php") ?>
  <?php $this->load->view("_partials/js.php") ?>

  
  <script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>
