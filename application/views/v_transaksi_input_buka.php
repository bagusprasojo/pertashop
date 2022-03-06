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
				
			<div class="card-body">
				<form action="<?php echo site_url('buka/add') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="transaksi_id" value="<?php echo $transaksi->transaksi_id?>" />
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_logged']->user_id?>" />

					<input type="hidden" name="is_pengisian" value="0" />

					<?php if ($is_tutup == 0) {?>
						<input type="hidden" name="tutup" value="<?php $date = date("H:i", strtotime($transaksi->tutup)); echo "$date"; ?>" />
						<input type="hidden" name="depan_tutup" value="<?php echo $transaksi->depan_tutup?>" />
						<input type="hidden" name="digital_tutup" value="<?php echo $transaksi->digital_tutup?>" />
						<input type="hidden" name="deep_stick_tutup" value="<?php echo $transaksi->deep_stick_tutup?>" />
						
						<div class="form-group">
							<label for="tanggal">Tanggal*</label>
							<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								type="date" name="tanggal" min="0" value="<?php echo $transaksi->tanggal ?>"/>
							<div class="invalid-feedback">
								<?php echo form_error('tanggal') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="buka">Buka*</label>
							<input class="form-control <?php echo form_error('buka') ? 'is-invalid':'' ?>"
							type="time"  name="buka" value="<?php $date = date("H:i", strtotime($transaksi->buka)); echo "$date"; ?>"/>
							<div class="invalid-feedback">
								<?php echo form_error('buka') ?>
							</div>
						</div>


						<div class="form-group">
							<label for="name">Meteran Depan</label>
							<input class="form-control <?php echo form_error('depan_buka') ? 'is-invalid':'' ?>"
							type="number" step=".01" required name="depan_buka" placeholder="0" value = "<?php echo $transaksi->depan_buka ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('depan_buka') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Meteran Digital</label>
							<input class="form-control <?php echo form_error('digital_buka') ? 'is-invalid':'' ?>"
							type="number" step=".01" required name="digital_buka" placeholder="0" value = "<?php echo $transaksi->digital_buka ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('digital_buka') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Deep Stick</label>
							<input class="form-control <?php echo form_error('deep_stick_buka') ? 'is-invalid':'' ?>"
							type="number" step=".01" required name="deep_stick_buka" placeholder="0" value = "<?php echo $transaksi->deep_stick_buka ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('deep_stick_buka') ?>
							</div>
						</div>
					<?php } else {?>
						<input type="hidden" name="buka" value="<?php $date = date("H:i", strtotime($transaksi->buka)); echo "$date"; ?>" />
						<input type="hidden" name="depan_buka" value="<?php echo $transaksi->depan_buka?>" />
						<input type="hidden" name="digital_buka" value="<?php echo $transaksi->digital_buka?>" />
						<input type="hidden" name="deep_stick_buka" value="<?php echo $transaksi->deep_stick_buka?>" />
						
						<div class="form-group">
							<label for="tanggal">Tanggal*</label>
							<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								type="date" name="tanggal" min="0" value="<?php echo $transaksi->tanggal ?>"/>
							<div class="invalid-feedback">
								<?php echo form_error('tanggal') ?>
							</div>
						</div>

						
						<div class="form-group">
							<label for="buka">Tutup*</label>
							<input class="form-control <?php echo form_error('tutup') ? 'is-invalid':'' ?>"
							type="time"  name="tutup" value="<?php $date = date("H:i", strtotime($transaksi->tutup)); echo "$date"; ?>"/>
							<div class="invalid-feedback">
								<?php echo form_error('tutup') ?>
							</div>
						</div>


						<div class="form-group">
							<label for="name">Meteran Depan Tutup</label>
							<input class="form-control <?php echo form_error('depan_tutup') ? 'is-invalid':'' ?>"
							type="number" step=".01" required name="depan_tutup" placeholder="0" value = "<?php echo $transaksi->depan_tutup ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('depan_tutup') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Meteran Digital Tutup</label>
							<input class="form-control <?php echo form_error('digital_tutup') ? 'is-invalid':'' ?>"
							type="number" step=".01" required name="digital_tutup" placeholder="0" value = "<?php echo $transaksi->digital_tutup ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('digital_tutup') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Deep Stick Tutup</label>
							<input class="form-control <?php echo form_error('deep_stick_tutup') ? 'is-invalid':'' ?>"
							type="number" step=".01" required name="deep_stick_tutup" placeholder="0" value = "<?php echo $transaksi->deep_stick_tutup ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('deep_stick_tutup') ?>
							</div>
						</div>
					<?php } ?>
					
					<input class="btn btn-success" type="submit" name="btn" value="Save" />
				</form>

			</div>

			<div class="card-footer small text-muted">
				* required fields
			</div>					
		
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/footer.php") ?>
  <?php $this->load->view("_partials/modal.php") ?>
  <?php $this->load->view("_partials/js.php") ?>

  
  <script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
  </script>

  <script src="<?php echo base_url().'vendor/jquery-ui-1.12.1/jquery-ui.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#nama').autocomplete({
                source: "<?php echo site_url('transaksi/get_autocomplete');?>",
      
                select: function (event, ui) {
                    $('[name="nama"]').val(ui.item.label); 
                    $('[name="produk_id"]').val(ui.item.description);
                    $('[name="kode"]').val(ui.item.kode); 
                }
            });
 
        });
    </script>

</body>

</html>
