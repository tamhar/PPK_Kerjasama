<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Preview Data Kerjasama</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Detail Data Lembaga -->
		<form> <!--method="POST" action="http://localhost/avenxo/index.php/c_input_perwakilan_Mitra/simpanmitra"-->
			<div class="row">
				<label class="col-sm-2 col-form-label">Kode Kerjasama</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->kode_kerjasama;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Deskripsi</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->deskripsi;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Tanggal Mulai</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->tanggal_mulai;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Tanggal Selesai</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->tanggal_selesai;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Nama Lembaga</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->nama_lembaga;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Perwakilan Lembaga</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->perwakilan_lembaga;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Upload Berkas</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->upload_berkas;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Jenis Berkas</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->jenis_berkas;?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Status Kerjasama</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $user->status_kerjasama;?>
				</label>
			</div>
			<div class="col-sm-11">
                    <div class="pull-right">
					<a href="<?= site_url('c_data_kerjasama/index')?>" class="btn btn-primary">Kembali</a>

                    </div>
		</form>
		<!-- End Form -->
	</div>
</div>