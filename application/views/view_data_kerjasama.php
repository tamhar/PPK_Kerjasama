<div class="panel panel-default">
	<div class="panel-heading">
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
					<th scope="col">ID Kerjasama</th> 
					<th scope="col">Deskripsi</th>
					<th scope="col">Tanggal Mulai</th>
					<th scope="col">Tanggal Selesai</th>
					<th scope="col">Nama Lembaga</th>
					<th scope="col">Perwakilan Lembaga</th>
					<th scope="col">Status Kerjasama</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				
				<?php 
					foreach($kerjasama as $tampil ){?>
					
				<tr>
					<td><?= $tampil['ID_KERJASAMA']; ?></td>
					<td><?= $tampil['DESKRIPSI_KERJASAMA']; ?></td>
					<td><?= $tampil['TANGGAL_MULAI_KERJASAMA']; ?></td>
					<td><?= $tampil['TANGGAL_SELESAI_KERJASAMA']; ?></td>
					<td><?= $tampil['NAMA_LEMBAGA']; ?></td>
					<td><?= $tampil['NAMA_PERWAKILAN_LEMBAGA']; ?></td> 
					
					<td><?= $tampil['STATUS_KERJASAMA']; ?></td>
			    	<td class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
						<div class="dropdown-menu">
							<a href="<?php echo site_url('c_update_kerjasama/edit/'.$tampil['ID_KERJASAMA']); ?>" class="dropdown-item"><span class="glyphicon glyphicon-edit"></span>Edit<br></a>
							<!-- <a href="<?php echo site_url('c_input_kerjasama/hapus/'.$tampil['ID_KERJASAMA']); ?>" class="dropdown-item"><span class="glyphicon glyphicon-trash"></span>Hapus<br></a> -->


							<div class="dropdown-divider"></div>
							<a href="<?php echo site_url('c_data_kerjasama/preview/'.$tampil['ID_KERJASAMA']); ?>" class="dropdown-item"><span class="glyphicon glyphicon-eye-open"></span>Preview</a>
						</div>

					</td>
				</tr>
				<?php } ?>	
			
			</tbody>
		</table>
	</div>
</div>
	