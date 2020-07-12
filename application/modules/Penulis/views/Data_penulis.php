<div class="card">
	<div class="card-block">
		<h4 class="card-title"><?= $sub_title ?><a href="#form" data-target="#tambahpenulis" data-toggle="modal"
				class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Tambah</a>
		</h4>
		<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
		<div class="table-responsive m-t-40">
			<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
				width="100%">
				<thead>
					<tr>
						<th>Nama</th>
						<th>TTL</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Telp</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($penulis as $b) : ?>
					<tr>
						<td><?= $b['pen_nama']; ?></td>
						<td><?= $b['pen_lahir']; ?></td>
						<td><?= $b['pen_jk']; ?></td>
						<td><?= $b['pen_alamat']; ?></td>
						<td><?= $b['pen_telp']; ?></td>
						<td>
							<a href="<?php echo base_url('penulis/ubah/'.$b['pen_id']); ?>"
								class='btn btn-sm btn-info ti-pencil-alt'></a>
							<a href="<?php echo base_url('penulis/hapus/'.$b['pen_id']); ?>"
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
<div class="modal fade" id="tambahpenulis" tabindex="-1" role="dialog"
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
						<?=form_open('penulis/tambah/');?>
								<div class="card-body">
									<div class="form-group row">
										<label for="pen_id" class="col-sm-3 text-left control-label col-form-label">ID
											penulis</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="pen_id" name="pen_id"
												value="<?= $pen_id;?>" readonly>
										</div>
									</div>

									<div class="form-group row">
										<label for="penulis_nama"
											class="col-sm-3 text-left control-label col-form-label">Nama penulis</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="penulis_nama" name="pen_nama"
												placeholder="Nama penulis" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="penulis_nama"
											class="col-sm-3 text-left control-label col-form-label">Tanggal Lahir</label>
										<div class="col-sm-3">
											<input type="date" class="form-control" id="pen_lahir" name="pen_lahir"
												placeholder="DD/MM/YYY" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="penulis_nama"
											class="col-sm-3 text-left control-label col-form-label">Jenis Kelamin</label>
										<div class="col-sm-3">
										<div class="radio-inline">
									<label>
										<input name="pen_jk" value="L" type="radio" checked />
										<span><i class="fa fa-male"></i> Laki-Laki </span>
									</label>

									<label>
										<input name="pen_jk" value="P" type="radio" />
										<span><i class="fa fa-female"></i> Perempuan</span>
									</label>
								</div>
										</div>
									</div>
									
									</div>
									<div class="form-group row">
										<label for="penulis_alamat"
											class="col-sm-3 text-left control-label col-form-label">Alamat</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="penulis_alamat" name="pen_alamat"
												placeholder="Alamat penulis" required></textarea>
										</div>
</div>
										<div class="form-group row">
										<label for="penulis_telp"
											class="col-sm-3 text-left control-label col-form-label">No. Telp</label>
										<div class="col-sm-9">
											<input type="text" name="pen_telp" class="form-control" id="pen_telp"
												placeholder="Masukkan telp penulis" required>
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
