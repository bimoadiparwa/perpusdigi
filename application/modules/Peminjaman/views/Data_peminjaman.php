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
						<th>Rak</th>
						<th>Peminjam</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Petugas</th>
						<th>Tanggal Pinjam</th>
						<th>Tanggal Kembali</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($pinjam as $b) : ?>
					<tr>
						<td><?= $b['id_peminjaman']; ?></td>
						<td><?= $b['buku_judul']; ?></td>
						<td><?= $b['kd_rak']; ?></td>
						<td><?= $b['ang_nama']; ?></td>
						<td><?= $b['pen_nama']; ?></td>
						<td><?= $b['penerbit_nama']; ?></td>
						<td><?= $b['pet_nama']; ?></td>
						<td><?= $b['tgl_pinjam']; ?></td>
						<td><?= $b['tgl_harus_kembali']; ?></td>
						<?php if($b['status'] == 'Pending') : ?>
						<td><span class='badge badge-success'>Pending</span></td>
						<?php elseif($b['status'] == 'Sedang Dipinjam') : ?>
						<td><span class='badge badge-info'>Sedang Dipinjam</span></td>
						<?php elseif($b['status']== 'Sudah Dikembalikan'):?>
						<td><span class='badge badge-primary'>Sudah Dikembalikan</span></td>
						<?php elseif($b['status']== 'Dibatalkan'):?>
						<td><span class='badge badge-primary'>Dibatalkan</span></td>
						<?php endif;?>
						<td>
							<a href="<?php echo base_url('peminjaman/ubah/'.$b['id_peminjaman']); ?>"
								class='btn btn-sm btn-outline-info ti-pencil-alt'> Ubah</a>
							<a href="<?php echo base_url('peminjaman/hapus/'.$b['id_peminjaman']); ?>"
								class='btn btn-sm btn-outline-danger ti-trash'> Hapus</a>
							<a href="<?php echo base_url('pengembalian/form/'.$b['id_peminjaman']); ?>"
								class='btn btn-sm btn-outline-success ti-check-box'> Pengembalian</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
