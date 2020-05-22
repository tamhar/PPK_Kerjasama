<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Input Lembaga Mitra (Nasional - Non Universitas)</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Input Lembaga Nasional -->
		<form method="POST" action="http://localhost/avenxo/index.php/c_input_lembaga/tambah_nasional">
			<div class="form-group row">
				<label for="inputidlembaga" class="col-sm-2 col-form-label">
					ID Lembaga
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputidlembaga" name="idlembaga" value="<?= $id_lembaga; ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputnamalembaga" class="col-sm-2 col-form-label">
					Nama Lembaga
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputnamalembaga" name="namalembaga" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="jenislembaga" class="col-sm-2 col-form-label">
					Jenis Lembaga
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="jenislembaga" name="jenislembaga" value="Non Universitas" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputalamatlembaga" class="col-sm-2 col-form-label">
					Alamat Lembaga
				</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="alamatlembaga" id="inputalamatlembaga" required></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Provinsi </label>
				<div class="col-sm-4">
					<select name="provinsi" id="provinsi" class="form-control" required>          
						<option disabled="true" selected="true">Pilih Provinsi</option>                    
						<?php          
							foreach($provinsi as $data){ // Lakukan looping pada variabel siswa dari controller           
								echo "<option value='".$data->id_provinsi."'>".$data->nama_provinsi."</option>";          
							}          
							?>        
						</select>
					</div>
					<label class="col-sm-2 col-form-label"> Kota </label>
					<div class="col-sm-4">
						<select name="kota" id="kota" class="form-control" required>          
							<option disabled="true" selected="true">Pilih Kabupaten/Kota</option>                           
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> Negara </label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="negara" value="Indonesia" readonly>
					</div>
					<label class="col-sm-2 col-form-label"> Kode Pos </label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="kodepos" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> No Telepon </label>
					<div class="col-sm-1">
						<input type="text" class="form-control" name="kodenegara" value="+62" readonly>
					</div>
					<div class="col-sm-8">
						<input type="tel" class="form-control" name="telepon_lembaga" required> <!--pattern="[0-9]{3}[0-9]{4}[0-9]{4}"-->
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> Email </label>
					<div class="col-sm-10">
						<input class="form-control" type="email" name="email" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<input class="form-control" type="hidden" name="regional" value="Nasional">
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
							<button class="btn" onclick="location.href='<?php echo site_url('c_data_lembaga/index') ?>'">Batal</button>
						</div>
					</div>
				</div>
			</form>
			<!-- End Form -->
		</div>
	</div>

	<script>
		$('#provinsi').change(function(){ 
			var provinsi = $(this).val();
			$.ajax({
				url : "<?php echo site_url('c_input_lembaga/getKabKota');?>",
				type : "POST",
				data : {provinsi: provinsi},
				async : true,
				dataType : 'json',
				success: function(data){

					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html += '<option value='+data[i].id_kota+'>'+data[i].nama_kota+'</option>';
					}
					$('#kota').html(html);

				},
				error: function(ts) { 
					alert(ts.responseText) 
				}
			});  
		});
	</script>