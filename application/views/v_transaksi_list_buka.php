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
							<form action="<?php echo site_url('transaksi/index/'); ?>" method="post">
							<p>
								Nama <input value ="<?php echo $nama?>" type="search" name="cari" placeholder="Search Keyword..."> 
								Periode
								<input	type="date" name="tanggal1" value="<?php echo $tanggal1?>" /> s.d. 
								<input	type="date" name="tanggal2" value="<?php echo $tanggal2?>"/>
						
								<input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Buka</th>
										<th>Meteran Digital</th>
										<th>Meteran Belakang</th>
										<th>Deep Stick</th>
										<th>Action</th>
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
										
										<td width="150">
											<?php echo $transaksi->tanggal ?>
										</td>
										<td width="330">
											<?php echo $transaksi->buka ?>
										</td>
										<td>
											<?php echo $transaksi->depan_buka ?>
										</td>
										<td>
											<?php echo $transaksi->digital_buka ?>
										</td>
										<td>
											<?php echo $transaksi->deep_stick_buka ?>
										</td>
										
										



										<td width="250">
											<a  href="<?php echo site_url('buka/edit/'.$transaksi->transaksi_id) ?>">
												Edit </a> |
											<a onclick="deleteConfirm('<?php echo site_url('buka/delete/'.$transaksi->transaksi_id) ?>')"
												href="#!" >Hapus</a>
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
