
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Data Perwakilan Mitra</h2>
		<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Nama Lembaga</th>
					<th scope="col">Nama</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Jabatan</th>
					<th scope="col">Alamat Perwakilan</th>
					<th scope="col">Kode Pos </th>
					<th scope="col">Nomor Telepon</th>
					<th scope="col">Email</th> 
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($result as $value) {
				?>
				<tr>
					<td> <?= $value['NAMA_PERWAKILAN_LEMBAGA'] ?> </td>
					<td> <?= $value['NAMA'] ?> </td>
					<td> <?= $value['JENIS_KELAMIN_PERWAKILAN_LEMBAGA']?> </td>
					<td> <?= $value['JABATAN']?> </td>
					<td> <?= $value['ALAMAT_PERWAKILAN_LEMBAGA']." ".$value['NAMA_KOTA']." ".$value['NAMA_PROVINSI']." ".$value["NAMA_NEGARA"]?> </td>
					<td> <?= $value['KODEPOS_PERWAKILAN_LEMBAGA']?> </td>
					<td> <?= $value['NOTELP_PERWAKILAN_LEMBAGA']?> </td>
					<td> <?= $value['EMAIL_PERWAKILAN_LEMBAGA']?> </td>
					<td class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
						<div class="dropdown-menu">
							<a href="http://localhost/avenxo/index.php/c_data_perwakilan_Mitra/editmitra/<?= $value["ID_PERWAKILAN_LEMBAGA"] ?>" class="dropdown-item"><span class="glyphicon glyphicon-edit"></span>Edit<br></a>
							<div class="dropdown-divider"></div>
							<a href="detailMitra/<?= $value["ID_PERWAKILAN_LEMBAGA"] ?>" class="dropdown-item"><span class="glyphicon glyphicon-eye-open"></span>Lihat Detail</a>
						</div>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
	