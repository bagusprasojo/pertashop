<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">UD Ikhsan Prajawan Fadli</div>
    

	<div class="list-group">
		<a href="<?php echo site_url('/') ?>" class="list-group-item active">Home</a>
			
		<?php
			if (isset($_SESSION['user_logged'])){ 
		?>
			<a href="<?php echo site_url('user/logout') ?>" class="list-group-item ">Logout</a>
			<a href="<?php echo site_url('user') ?>" class="list-group-item">Data User</a>
			<a href="<?php echo site_url('buka') ?>" class="list-group-item">Input Transaksi Buka</a>
			
			<a href="<?php echo site_url('laporan') ?>" class="list-group-item">Laporan</a>
			<ul style="list-style-type:square;">
			<li><a href="<?php echo site_url('laporan/gainandloss') ?>">Rekap Administrasi Harian</a></li>
				<li><a href="<?php echo site_url('laporan/gainandloss') ?>">Gain / Loss</a></li>
				
			</ul>
			
			
		<?php
			} else {
		?>
			<a href="<?php echo site_url('user/login') ?>" class="list-group-item ">Login</a>
		<?php }?>
		
	</div>
	
</div>