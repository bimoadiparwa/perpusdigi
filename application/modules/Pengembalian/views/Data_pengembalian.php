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
						<th>ID Buku</th>
						<th>ID Anggota</th>
						<th>Tgl. Pinjam</th>
						<th>Jatuh Tempo</th>
						<th>Tgl. Kembali</th>
						<th>Denda</th>
						<th>Nominal</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($kembali as $k) : ?>
					<tr>
						<td><?= $k['id_peminjaman']; ?></td>
						<td><?= $k['buku_id']; ?></td>
						<td><?= $k['ang_id']; ?></td>
						<td><?= $k['tgl_pinjam']; ?></td>
						<td><?= $k['tgl_harus_kembali']; ?></td>
						<td><?= $k['tgl_kembali']; ?></td>
						<td><?= $k['denda']; ?></td>
						<td><?= $k['nominal']; ?></td>
						<td><span class="badge badge-primary"><?= $k['status']; ?></span></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>

