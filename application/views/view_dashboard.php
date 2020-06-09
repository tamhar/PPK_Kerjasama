<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<div class="panel panel-default">
	<div class="flex-container"> 
		<div class="main-box">
			<div class="flex-inside">
				<div class="box-left">
				<?php echo $ksdn->dalamnegri; ?>
				</div>
				<div class="box-right">
				Kerjasama Dalam Negeri Tahun Ini
				</div>
			</div>
			<div class="bottom">
				<a href="c_data_kerjasama/index"><p><b>Lihat detail</b></p></a>
			</div>
		</div>
		
		<div class="main-box">
			<div class="flex-inside">
				<div class="box-left">
				<?php echo $ksln->luarnegri; ?>
				</div>
				<div class="box-right">
				Kerjasama Luar Negeri Tahun Ini
				</div>
			</div>
			<div class="bottom">
				<a href="c_data_kerjasama/index"><p><b>Lihat detail</b></p></a>
			</div>
		</div>
		
		<div class="main-box">
			<div class="flex-inside">
				<div class="box-left">
				<?php echo $realisasi->terlaksana; ?>
				</div>
				<div class="box-right">
				Realisasi Kerjasama Mitra Tahun Ini
				</div>
			</div>
			<div class="bottom">
				<a href="c_data_kerjasama/index"><p><b>Lihat detail</b></p></a>
			</div>
		</div>
		
		<div class="main-box">
			<div class="flex-inside">
				<div class="box-left" style="background-color:#D9001B;">
				<?php echo $ksab->berakhir; ?>
				</div>
				<div class="box-right">
				Kerjasama yang akan berakhir
				</div>
			</div>
			<div class="bottom">
				<a href="c_data_kerjasama/index" style="color:#D9001B;"><p><b>Lihat detail</b></p></a>
			</div>
		</div>
	</div>
	
	<div style="display:flex;">
		<div class="chart">
			<div class="chart-top">
			Kerjasama Tahun Ini
			</div>
			<div class="chart-bottom">
			<?php include "dashboard_chart/kerjasama_chart.html"; ?>
			</div>
		</div>
		
		<div>
			<div class="total-berkas">
				<div class="berkas-top">
				Total Berkas Kerjasama
				</div>
				<?php include "dashboard_chart/berkas_donut_chart.html"; ?>
			</div>
			
		</div>
	</div>
</div>