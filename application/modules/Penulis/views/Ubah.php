<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-block">
			<?=form_open('penulis/update/'.$penulis['pen_id']);?>
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">ID penulis</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pen_id" value="<?= $penulis['pen_id'] ?>"
									readonly></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Nama penulis</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pen_nama"
									value="<?=$penulis['pen_nama']?>"> </div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tanggal Lahir</label>
							<div class="col-md-9">
								<input type="date" class="form-control" name="pen_lahir"
									value="<?= $penulis['pen_lahir'] ?>"></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Jenis Kelamin</label>
							<div class="col-md-4">
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
					<!--/span-->
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Alamat</label>
							<div class="col-md-9">

								<textarea class="form-control" id="penulis_alamat" name="pen_alamat"
									value="<?=$penulis['pen_alamat']?>" required></textarea>

							</div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">No. Telp</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pen_telp"
									value="<?=$penulis['pen_telp']?>" required>
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
			</div>
			<hr>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-6">
						<div class="row text-center">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn btn-success">Submit</button>
								<a href="<?= base_url('penulis')?>" class="btn btn-inverse">Cancel</a>
							</div>
						</div>
					</div>
					<div class="col-md-6"> </div>
				</div>
			</div>
			<?= 
								form_close();
								 ?>
		</div>
	</div>
</div>
