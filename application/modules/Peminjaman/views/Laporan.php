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
						<th>ID Peminjaman</th>
						<th>Judul</th>
						<th>Peminjam</th>
						<th>Petugas</th>
						<th>Tgl. Pinjam</th>
						<th>Jatuh Tempo</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($pinjam as $k) : ?>
					<tr>
						<td><?= $k['id_peminjaman']; ?></td>
						<td><?= $k['buku_judul']; ?></td>
						<td><?= $k['ang_nama']; ?></td>
						<td><?= $k['pet_nama']; ?></td>
						<td><?= $k['tgl_pinjam']; ?></td>
						<td><?= $k['tgl_harus_kembali']; ?></td>
						<td><span class="badge badge-info"><?= $k['status']; ?></span></td>
						
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>

