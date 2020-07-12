<div class="card">
	<div class="card-block">
		<h4 class="card-title"><?= $sub_title ?><a href="#form" data-target="#tambahbuku" data-toggle="modal"
				class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Tambah</a>
		</h4>
		<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
		<div class="table-responsive m-t-40">
			<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
				width="100%">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Judul</th>
						<th>Halaman</th>
						<th>Rak</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tahun</th>
						<th>Eksampler</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($buku as $b) : ?>
					<tr>
						<td><img  src="<?php echo base_url();?>assets/upload/<?= $b['buku_gambar'];?>"width="80" height="80"></td>
						<td><?= $b['buku_judul']; ?></td>
						<td><?= $b['buku_halaman']; ?></td>
						<td><?= $b['kd_rak']; ?></td>
						<td><?= $b['penerbit_nama']; ?></td>
						<td><?= $b['pen_nama']; ?></td>
						<td><?= $b['buku_tahun']; ?></td>
						<td><?= $b['buku_stock']; ?></td>
						<?php if($b['buku_stock'] > 0):?>
							<td><span class="badge badge-primary">Tersedia</span></td>
						<?php elseif($b['buku_stock'] < 1): ?>
							<td><span class="badge badge-warning">Tidak Tersedia</span></td>			
						<?php endif;?>
						<td>
							<a href="<?php echo base_url('buku/ubah/'.$b['buku_id']); ?>"
								class='btn btn-sm btn-outline-info ti-pencil-alt' data-toggle="tooltip" title=""
							data-original-title="Ubah Buku <?= $b['buku_judul'] ?>"></a>
							<a href="<?php echo base_url('buku/hapus/'.$b['buku_id']); ?>"
								class='btn btn-sm btn-outline-danger ti-trash' data-toggle="tooltip" title=""
							data-original-title="Hapus Buku <?= $b['buku_judul'] ?>"></a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- sample modal content -->
<div class="modal fade" id="tambahbuku" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title text-center" id="exampleModalScrollableTitle"><?= $modal_title; ?></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div class="card">
						<?=form_open_multipart('buku/tambah/');?>
								<div class="card-body">
									<div class="form-group row">
										<label for="buku_id" class="col-sm-3 text-left control-label col-form-label">ID
											Buku</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="buku_id" name="buku_id"
												value="<?= $buku_id;?>" readonly>
										</div>
									</div>

									<div class="form-group row">
										<label for="buku_isbn"
											class="col-sm-3 text-left control-label col-form-label">ISBN</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="buku_isbn" name="buku_isbn"
												value="<?= $isbn; ?>" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_judul"
											class="col-sm-3 text-left control-label col-form-label">Judul</label>
										<div class="col-sm-9">
											<input type="text" name="buku_judul" class="form-control" id="buku_judul"
												placeholder="Masukkan judul buku" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_deskripsi"
											class="col-sm-3 text-left control-label col-form-label">Deksripsi</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="buku_deskripsi" name="buku_deskripsi"
												placeholder="Deskripsi buku" required></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_halaman"
											class="col-sm-3 text-left control-label col-form-label">Jumlah Hal.</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="buku_halaman"
												name="buku_halaman" placeholder="Jumlah Halaman" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_kategori"
											class="col-sm-3 text-left control-label col-form-label">Kategori</label>
										<div class="col-sm-3">
											<select name="buku_kategori" class="form-control" required> 
												<option value="">Pilih Kategori</option>
												<?php foreach ($kategori as $k): ?>
												<option value="<?php echo $k['kat_id']; ?>">
													<?php echo $k['kat_nama']; ?>
												</option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="genre"
											class="col-sm-3 text-left control-label col-form-label">Genre</label>
										<div class="col-sm-3">
											<select name="genre" class="form-control" required>
												<option value="">Pilih Genre</option>
												<option value="Fiksi">Fiksi</option>
												<option value="Non-Fiksi">Non Fiksi</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="kd_rak"
											class="col-sm-3 text-left control-label col-form-label">Rak</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" id="kd_rak" name="kd_rak"
												placeholder="Rak" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_penulis"
											class="col-sm-3 text-left control-label col-form-label">Penulis</label>
										<div class="col-sm-4">
											<select name="buku_penulis" class="form-control" required>
												<option value="">Pilih Penulis</option>
												<?php foreach ($penulis as $p): ?>
												<option value="<?php echo $p['pen_id']; ?>">
													<?php echo $p['pen_nama']; ?>
												</option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_Penerbit"
											class="col-sm-3 text-left control-label col-form-label">Penerbit</label>
										<div class="col-sm-4">
											<select name="buku_penerbit" class="form-control" required>
												<option value="">Pilih Penerbit</option>
												<?php foreach ($penerbit as $pub): ?>
												<option value="<?php echo $pub['penerbit_id']; ?>">
													<?php echo $pub['penerbit_nama']; ?>
												</option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_tahun"
											class="col-sm-3 text-left control-label col-form-label">Tahun Terbit</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" id="buku_tahun" name="buku_tahun"
												placeholder="Tahun" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_stock"
											class="col-sm-3 text-left control-label col-form-label">Eksampler</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" id="buku_stock" name="buku_stock"
												placeholder="Eksampler" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="buku_gambar"
											class="col-sm-3 text-left control-label col-form-label">Upload
											Gambar</label>
										<div class="col-sm-6">
												<input type="file" class="form-control" id="buku_gambar" name="buku_gambar" required>
										</div>
									</div>
								</div>
								<hr>
								<div class="card-body">
									<div class="form-group m-b-0 text-center">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-info waves-effect waves-light"><i
												class="fas fa-save"></i> Simpan</button>
									</div>
								</div>
							<?=
							form_close();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->
