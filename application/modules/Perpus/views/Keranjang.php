
<br>
<div class="card">
	<div class="card-block">
		<h3 class="card-title"><?= $sub_title ?>
		<a href="<?= base_url('perpus/hapus_semua'); ?>"
				class="btn pull-right hidden-sm-down btn-outline-danger"><i class="ti-trash"></i> Kosongkan</a>
		</h3>
		<div class="table-responsive m-t-40">
			<table id="example23" class="display nowrap table table-hover table-bordered" cellspacing="0"
				width="100%">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Judul</th>
						<th>Rak</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tanggal Pinjam</th>
						<th>Tanggal Kembali</th>
						<th>Tahun</th>
						<th>Aksi</th>
					</tr>
				</thead>
					
				<tbody>
					<?= form_open('perpus/pinjam'); ?>
					<?php if(count($tmp)):?>
					<?php foreach($tmp as $tmp) : ?>
					<input type="hidden" name="id_peminjaman[]" id="id_peminjaman" value="<?= $id_pinjam ?>">
					<input type="hidden" name="ang_id[]" id="ang_id" value="<?= $this->session->userdata('ang_id');?>">
					<input type="hidden" name="buku_id[]" id="buku_id" value="<?= $tmp['buku_id'];?>">
					<input type="hidden" name="kat_id[]" id="kat_id" value="<?= $tmp['kat_id']; ?>">
					<input type="hidden" name="pen_id[]" id="pen_id" value="<?= $tmp['pen_id'];?>">
					<input type="hidden" name="penerbit_id[]" id="penerbit_id" value="<?= $tmp['penerbit_id']; ?>">
					<tr>
						<td><img  src="<?php echo base_url();?>assets/upload/<?= $tmp['buku_gambar'];?>"width="80" height="80"></td>
						<td><?= $tmp['buku_judul'];?></td>
						<td><?= $tmp['kd_rak'];?></td>
						<td><?= $tmp['pen_nama'];?></td>
						<td><?= $tmp['penerbit_nama'];?></td>
						<td><input type="date" class="form-control" name="tgl_pinjam[]" id="tgl_pinjam"></td>
						<td><input type="date" name="tgl_harus_kembali[]" class="form-control" id="tgl_harus_kembali"></td>
						<td><?= $tmp['buku_tahun']; ?></td>
						<td>
							<a href="<?php echo base_url('perpus/hapus/'.$tmp['buku_id']); ?>"
								class='btn btn-sm btn-outline-danger ti-trash'></a>
						</td>
					</tr>
					<?php endforeach;?>
<?php else:?>
<?php endif;?>
					<tr>
						<td colspan="9">
						<button type="submit" class="btn btn-outline-primary btn-rounded m-r-5 pull-right"
									data-toggle="tooltip" title="" data-original-title="Pinjam Buku"><i
										class="ti-shopping-cart-full"> Pinjam</i></button>
						</td>
					</tr>
					<?= 
					form_close();
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
