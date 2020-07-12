<div class="card">
	<div class="card-block">
		<h4 class="card-title"><?= $sub_title ?>
		</h4>
		<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
		<div class="table-responsive m-t-40">
			<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
				width="100%">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Telp</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($anggota as $b) : ?>
					<tr>
						<td><?= $b['ang_nama']; ?></td>
						<td><?= $b['ang_lahir']; ?></td>
						<td><?= $b['ang_jk']; ?></td>
						<td><?= $b['ang_alamat']; ?></td>
						<td><?= $b['ang_telp']; ?></td>
						<td><?= $b['email']; ?></td>
						<td>
							<a href="<?php echo base_url('anggota/hapus/'.$b['ang_id']); ?>"
								class='btn btn-sm btn-danger ti-trash'></a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
