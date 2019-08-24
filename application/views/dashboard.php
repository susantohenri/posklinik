<?php foreach (array('User', 'Role', 'Pasien', 'Layanan', 'Obat', 'Penjualan', 'PenjualanLayanan', 'PenjualanObat', 'Dokter', 'Staff', 'PenjualanLainLain', 'JenisKartu', 'AsalPasien'/*additionalEntity*/) as $controller) : ?>

<div class="col-sm-2">
	<a href="<?= site_url($controller) ?>">
	  <div class="info-box">
	    <span class="info-box-icon bg-info"><i class="fas fa-cog"></i></span>
	    <div class="info-box-content">
	      <span class="info-box-text"><?= $controller ?></span>
	      <span class="info-box-number"></span>
	    </div>
	  </div>
	</a>
</div>

<?php endforeach; ?>