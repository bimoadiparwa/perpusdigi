
<div class="card">
	<div class="card-block">
		<h4 class="card-title"><?= $sub_title ?>
		</h4>
		<div class="table-responsive m-t-40">
			<table id="history" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
				width="100%">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Judul</th>
						<th>Rak</th>
						<th>Peminjam</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Petugas</th>
						<th>Tanggal Pinjam</th>
						<th>Tanggal Kembali</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($history as $b) : ?>
					<tr>
						<td><img  src="<?php echo base_url();?>assets/upload/<?= $b['buku_gambar'];?>"width="80" height="80"></td>
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
						<td><span class='badge badge-danger'>Dibatalkan</span></td>
						<?php endif;?>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>

