<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Data Kerjasama</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="form-group row">
		<div class="col-sm-11">
			<div class="pull-right">
				<a href="<?= site_url('c_input_kerjasama')?>"><button class="btn btn-primary">+ Insert</button></a>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Kode Kerjasama</th> 
					<th scope="col">Deskripsi</th>
					<th scope="col">Tanggal Mulai</th>
					<th scope="col">Tanggal Selesai</th>
					<th scope="col">Nama Lembaga</th>
					<th scope="col">Perwakilan Lembaga</th>
					<th scope="col">Upload Berkas</th>
					<th scope="col">Jenis Berkas</th>
					<th scope="col">Status Kerjasama</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				
				<?php 
					foreach($data as $show ){ ?>
					
				<tr>
					<td><?= $show['kode_kerjasama']; ?></td>
					<td><?= $show['deskripsi']; ?></td>
					<td><?= $show['tanggal_mulai']; ?></td>
					<td><?= $show['tanggal_selesai']; ?></td>
					<td><?= $show['nama_lembaga']; ?></td>
					<td><?= $show['perwakilan_lembaga']; ?></td>
					<td><?= $show['upload_berkas']; ?></td>
					<td><?= $show['jenis_berkas']; ?></td>
					<td><?= $show['status_kerjasama']; ?></td>
					<td>
			    	<td class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
						<div class="dropdown-menu">
							<a href="<?php echo site_url('c_input_kerjasama/edit/'.$show['kode_kerjasama']); ?>" class="dropdown-item"><span class="glyphicon glyphicon-edit"></span>Edit<br></a>
							<a href="<?php echo site_url('c_input_kerjasama/hapus/'.$show['kode_kerjasama']); ?>" class="dropdown-item"><span class="glyphicon glyphicon-trash"></span>Hapus<br></a>


							<div class="dropdown-divider"></div>
							<a href="<?php echo site_url('c_data_kerjasama/preview/'.$show['kode_kerjasama']); ?>" class="dropdown-item"><span class="glyphicon glyphicon-eye-open"></span>Preview</a>
						</div>

					</td>
				</tr>
				<?php } ?>	
			
			</tbody>
		</table>
	</div>
</div>
	