<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Preview Data Kerjasama</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Detail Data Lembaga -->
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Data Kerjasama</a></li>
			<li><a data-toggle="tab" href="#menu1">Data Lembaga</a></li>
			<li><a data-toggle="tab" href="#menu2">Data Perwakilan Lembaga</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="row">
				<label class="col-sm-2 col-form-label">Id Kerjasama</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $hasil->ID_KERJASAMA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Deskripsi</label>
				<label for="namalembaga" class="col-sm-2 col-form-label">
					<?php echo $hasil->DESKRIPSI_KERJASAMA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Tanggal Mulai</label>
				<label for="alamatlembaga" class="col-sm-2 col-form-label">
					<?php echo $hasil->TANGGAL_MULAI_KERJASAMA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Tanggal Selesai</label>
				<label for="regional" class="col-sm-2 col-form-label">
					<?php echo $hasil->TANGGAL_SELESAI_KERJASAMA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label"> Nama Lembaga </label>
				<label for="negara" class="col-sm-2 col-form-label">
					<?php echo $hasil->NAMA_LEMBAGA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label"> Perwakilan Lembaga </label>
				<label for="kodepos" class="col-sm-2 col-form-label">
					<?php echo $hasil->NAMA_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
						<div class="row">
				<label class="col-sm-2 col-form-label"> Status Kerjasama </label>
				<label for="email" class="col-sm-2 col-form-label">
					<?php echo $hasil->STATUS_KERJASAMA ?>
				</label>
			</div>

			</div>
			<div id="menu1" class="tab-pane fade">
				<div class="row">
					<label class="col-sm-2 col-form-label">Kode Lembaga</label>
					<label for="kodelembaga" class="col-sm-2 col-form-label">
						<?php echo $hasil->ID_LEMBAGA ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label">Nama Lembaga</label>
					<label for="namalembaga" class="col-sm-2 col-form-label">
						<?php echo $hasil->NAMA_LEMBAGA ?>
					</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Lembaga</label>
					<label for="alamatlembaga" class="col-sm-2 col-form-label">
						<?php echo $hasil->ALAMAT_LEMBAGA ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label">Regional</label>
					<label for="regional" class="col-sm-2 col-form-label">
						<?php echo $hasil->REGIONAL ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Negara </label>
					<label for="negara" class="col-sm-2 col-form-label">
						<?php echo $hasil->NEGARA ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Kode Pos </label>
					<label for="kodepos" class="col-sm-2 col-form-label">
						<?php echo $hasil->KODEPOS_LEMBAGA ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Nomor Telepon </label>
					<label for="nomortelepon" class="col-sm-2 col-form-label">
						<?php echo $hasil->NOTELP_LEMBAGA ?>
					</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> Email </label>
					<label for="email" class="col-sm-2 col-form-label">
						<?php echo $hasil->EMAIL_LEMBAGA ?>
					</label>
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div class="row">
				<label class="col-sm-2 col-form-label">Nama Lembaga</label>
				<label for="kodelembaga" class="col-sm-2 col-form-label">
					<?php echo $hasil->NAMA_LEMBAGA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<label for="namalembaga" class="col-sm-2 col-form-label">
					<?php echo $hasil->NAMA_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<label for="alamatlembaga" class="col-sm-2 col-form-label">
					<?php echo $hasil->JENIS_KELAMIN_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<label for="regional" class="col-sm-2 col-form-label">
					<?php echo $hasil->JABATAN ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label"> Alamat </label>
				<label for="negara" class="col-sm-2 col-form-label">
					<?php echo $hasil->ALAMAT_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label"> Kode Pos </label>
				<label for="kodepos" class="col-sm-2 col-form-label">
					<?php echo $hasil->KODEPOS_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
			<div class="row">
				<label class="col-sm-2 col-form-label"> Nomor Telepon </label>
				<label for="nomortelepon" class="col-sm-2 col-form-label">
					<?php echo $hasil->NOTELP_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Email </label>
				<label for="email" class="col-sm-2 col-form-label">
					<?php echo $hasil->EMAIL_PERWAKILAN_LEMBAGA ?>
				</label>
			</div>
		</div>
		<!-- End Form -->
	</div>
</div>