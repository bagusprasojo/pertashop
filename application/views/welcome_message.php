<?php $this->load->view("_partials/head.php") ?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <?php $this->load->view("_partials/navigation.php") ?>
      
        <?php if ($show_dashboard == 1) {?>
          	<h2>
			  	<?php 
			  		$date=date_create();
					echo date_format($date,"F Y");
				?>
			</h2>
          <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead align="center">
									<tr>
										<th rowspan="2">Tanggal</th>
										<th colspan="2">Buka / Tutup</th>
										<th colspan="3">Meteran Depan</th>
										<th colspan="3">Meteran Digital</th>
										<th colspan="3">Deep Stick</th>
										
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
										$no = 1;
										foreach ($transaksis as $transaksi): 
									?>
									<tr>
										<td width="100"><?php echo $transaksi->tanggal ?></td>
										<td width="60"><?php $date = date("H:i", strtotime($transaksi->buka)); echo $date ?></td>
										<td width="60"><?php $date = date("H:i", strtotime($transaksi->tutup)); echo $date ?></td>
										<td width="100"><?php echo $transaksi->depan_buka ?></td>
										<td width="100"><?php echo $transaksi->depan_tutup ?></td>
										<td width="100"><?php echo $transaksi->depan_buka - $transaksi->depan_tutup ?></td>
										<td width="100"><?php echo $transaksi->digital_buka ?></td>
										<td width="100"><?php echo $transaksi->digital_tutup ?></td>
										<td width="100"><?php echo $transaksi->digital_buka- $transaksi->digital_tutup ?></td>
										<td width="100"><?php echo $transaksi->deep_stick_buka ?></td>
										<td width="100"><?php echo $transaksi->deep_stick_tutup ?></td>
										<td width="100"><?php echo $transaksi->deep_stick_buka- $transaksi->deep_stick_tutup ?></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
        <?php }?>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>
