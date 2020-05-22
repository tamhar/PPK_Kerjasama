<div class="panel panel-default">
	<div class="panel-heading">
		<h2>input perwakilan Mitra (Internasional)</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Mitra -->
		<form method="POST" action="http://localhost/avenxo/index.php/c_input_perwakilan_Mitra/simpaneditmitrainternasional">
			<div class="form-group row">
				<label for="inputperwakilan" class="col-sm-2 col-form-label">
					ID Perwakilan Lembaga
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputperwakilan" name="idperwakilan" value="<?= $result[0]->ID_PERWAKILAN_LEMBAGA ?>" readonly placeholder="ID Perwakilan Lembaga">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputlembaga" class="col-sm-2 col-form-label">
					ID Lembaga
				</label>
				<div class="col-sm-10">
			     <input type="text" class="form-control" id="inputlembaga" value="<?= $result[0]->ID_LEMBAGA ?>" readonly name="idlembaga" placeholder="ID Lembaga">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputnamalembaga" class="col-sm-2 col-form-label">
					Nama Lembaga
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="namalembaga" value="<?= $result[0]->NAMA_LEMBAGA ?>" readonly name="namalembaga" placeholder="Nama Lembaga">
			    </div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Sebutan </label>
				<div class="col-sm-10">
					<select class="form-control" name="sebutan">
						<option value="Mr" selected="true"> Mr </option>
						<option value="Mrs"> Mrs </option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputnama" class="col-sm-2 col-form-label">
					Nama
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputnama" value="<?= $result[0]->NAMA ?>" name="nama" placeholder="Nama">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputjabatan" class="col-sm-2 col-form-label">
					Jabatan
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputnama" value="<?= $result[0]->JABATAN ?>" name="jabatan" placeholder="Jabatan">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputnama" class="col-sm-2 col-form-label">
					Jenis Kelamin
				</label>
				<div class="col-sm-10">
					<div class="form-check form-check-inline">
			          <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Laki - Laki">
			          <label class="form-check-label" for="gridRadios1">
			            Laki - Laki
			          </label>
			        </div>
			        <div class="form-check form-check-inline">
			          <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Perempuan">
			          <label class="form-check-label" for="gridRadios1">
			            Perempuan
			          </label>
			        </div>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputalamat" class="col-sm-2 col-form-label">
					Alamat
				</label>
				<div class="col-sm-10">
			      <textarea class="form-control" name="alamat" id="inputalamat"></textarea>
			    </div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Provinsi </label>
				<div class="col-sm-4">
					<select class="form-control" name="provinsi">
						<option disabled="true"> Pilih Provinsi </option>
						<option value="<?= $result[0]->ID_PROVINSI ?>" selected="true"> <?= $result[0]->NAMA_PROVINSI ?> </option>
					</select>
				</div>
				<label class="col-sm-2 col-form-label"> Kota </label>
				<div class="col-sm-4">
					<select class="form-control" name="kota">
						<option disabled="true"> Pilih Kota </option>
						<option value="<?= $result[0]->ID_KOTA ?>" selected="true"> <?= $result[0]->NAMA_KOTA ?> </option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Negara </label>
				<div class="col-sm-4">
					<select class="form-control" name="negara">
						<option disabled="true"> Pilih Negara </option>
						<option value="<?= $result[0]->ID_NEGARA ?>" selected="true"> <?= $result[0]->NAMA_NEGARA ?> </option>
					</select>
				</div>
				<label class="col-sm-2 col-form-label"> Kode Pos </label>
				<div class="col-sm-4">
					<textarea value="<?= $result[0]->KODEPOS_PERWAKILAN_LEMBAGA ?>" name="kodepos" selected="true"> <?= $result[0]->KODEPOS_PERWAKILAN_LEMBAGA ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> No Telepon </label>
				<div class="col-sm-2">
					<select class="form-control" readonly name="kodenegara">
						<option value="<?= $result[0]->KODE_TELPON_NEGARA ?>" selected="true"> <?= $result[0]->KODE_TELPON_NEGARA ?></option>
					</select>
				</div>
				<div class="col-sm-8">
					<textarea class="form-control" value="<?= $result[0]->NOTELP_PERWAKILAN_LEMBAGA ?>" name="notelepon"selected="true"> <?= $result[0]->NOTELP_PERWAKILAN_LEMBAGA ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Email </label>
				<div class="col-sm-10">
					<textarea value="<?= $result[0]->EMAIL_PERWAKILAN_LEMBAGA ?>" name="email" selected="true"> <?= $result[0]->EMAIL_PERWAKILAN_LEMBAGA ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-11">
					<div class="pull-right">
						<button class="btn btn-primary">Simpan</button>
					</div>
				</div>
				<div class="col-sm-1">
					<div class="pull-right">
						<button class="btn">Cancel</button>
					</div>
				</div>
			</div>
		</form>
		<!-- End Form -->
	</div>
</div>