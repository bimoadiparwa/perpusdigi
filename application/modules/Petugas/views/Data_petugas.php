<div class="card">
	<div class="card-block">
		<h4 class="card-title"><?= $sub_title ?><a href="#form" data-target="#tambahpetugas" data-toggle="modal"
				class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Tambah</a>
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
						<th>Role</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($petugas as $b) : ?>
					<tr>
						<td><?= $b['pet_nama']; ?></td>
						<td><?= $b['pet_lahir']; ?></td>
						<td><?= $b['pet_jk']; ?></td>
						<td><?= $b['pet_alamat']; ?></td>
						<td><?= $b['pet_telp']; ?></td>
						<td><?= $b['email']; ?></td>
						<td><?= $b['role']; ?></td>
						<td>
							<a href="<?php echo base_url('petugas/ubah/'.$b['pet_id']); ?>"
								class='btn btn-sm btn-info ti-pencil-alt'></a>
							<a href="<?php echo base_url('petugas/hapus/'.$b['pet_id']); ?>"
								class='btn btn-sm btn-danger ti-trash'></a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- sample modal content -->
<div class="modal fade" id="tambahpetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
	aria-hidden="true">
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
							<?=form_open('petugas/tambah/');?>
							<div class="card-body">
								<div class="form-group row">
									<label for="pet_id" class="col-sm-3 text-left control-label col-form-label">ID
										petugas</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="pet_id" name="pet_id"
											value="<?= $pet_id;?>" readonly>
									</div>
								</div>

								<div class="form-group row">
									<label for="pet_nama" class="col-sm-3 text-left control-label col-form-label">Nama
										petugas</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="pet_nama" name="pet_nama"
											placeholder="Nama petugas" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="pet_nama"
										class="col-sm-3 text-left control-label col-form-label">Tanggal Lahir</label>
									<div class="col-sm-3">
										<input type="date" class="form-control" id="pet_lahir" name="pet_lahir"
											placeholder="DD/MM/YYY" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="pet_nama" class="col-sm-3 text-left control-label col-form-label">Jenis
										Kelamin</label>
									<div class="col-sm-3">
										<div class="radio-inline">
											<label>
												<input name="pet_jk" value="L" type="radio" checked />
												<span><i class="fa fa-male"></i> Laki-Laki </span>
											</label>

											<label>
												<input name="pet_jk" value="P" type="radio" />
												<span><i class="fa fa-female"></i> Perempuan</span>
											</label>
										</div>
									</div>
								</div>

							</div>
							<div class="form-group row">
								<label for="pet_alamat"
									class="col-sm-3 text-left control-label col-form-label">Alamat</label>
								<div class="col-sm-9">
									<textarea class="form-control" id="pet_alamat" name="pet_alamat"
										placeholder="Alamat petugas" required></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="pet_telp" class="col-sm-3 text-left control-label col-form-label">No.
									Telp</label>
								<div class="col-sm-9">
									<input type="text" name="pet_telp" class="form-control" id="pet_telp"
										placeholder="Masukkan telp petugas" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="pet_telp" class="col-sm-3 text-left control-label col-form-label">Role</label>
								<div class="col-sm-9">
								<select name="role" class="form-control" required>
												<option value="">Pilih Role</option>
												<option value="Admin">Admin</option>
												<option value="Pustakawan">Pustakawan</option>
											</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="pet_telp" class="col-sm-3 text-left control-label col-form-label">Email</label>
								<div class="col-sm-9">
									<input type="email" name="email" class="form-control" id="email"
										placeholder="Example@example.com" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="pet_telp" class="col-sm-3 text-left control-label col-form-label">Password</label>
								<div class="col-sm-9">
									<input type="password" name="password" class="form-control" id="password"
										placeholder="Masukkan Password" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="pet_telp" class="col-sm-3 text-left control-label col-form-label">Konfirmasi Password</label>
								<div class="col-sm-9">
									<input type="password" name="conf_password" class="form-control" id="conf_password"
										placeholder="Konfirmasi Password" required>
								</div>
							</div>

						</div>
						<hr>
						<div class="card-body">
							<div class="form-group m-b-0 text-center">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-info waves-effect waves-light"><i
										class="fa fa-save"></i> Simpan</button>
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
