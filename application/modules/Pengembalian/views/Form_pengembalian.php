<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-block">
			<?=form_open_multipart('pengembalian/simpan/'.$peminjaman['id_peminjaman']);?>
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">ID Peminjaman</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="id_peminjaman"
									value="<?= $peminjaman['id_peminjaman'] ?>" readonly></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Petugas</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pet_id"
									value="<?=$this->session->userdata('pet_id')?>" readonly> </div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tgl. Pinjam</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="tgl_pinjam"
									value="<?= $peminjaman['tgl_pinjam'] ?>" readonly></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Denda</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="denda" value="<?php $date = date('d', strtotime($peminjaman['tgl_harus_kembali']));
	$date2 = date('d');
	$selisih = $date2 - $date;
	if($selisih < 1 ){
		echo "Tidak Denda";
	}else{
		echo $selisih." Hari";
	} ?>" readonly> </div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tgl. Harus Kembali</label>
							<div class="col-md-9">
								<input type="text" class="form-control" value="<?= $peminjaman['tgl_harus_kembali'] ?>"
									readonly></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Nominal</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="nominal" value="<?php $denda = 1000; $nominal = $denda * $selisih; if($nominal < 0){
										echo 0	;
									}else{
										echo $nominal;
									} ?>" readonly> </div>
						</div>
					</div>
					<!--/span-->

				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tgl. Kembali</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="tgl_kembali" value="<?= date('Y-m-d'); ?>" readonly></div>
						</div>
					</div>
					<!--/span-->

				</div>
				<!--/row-->
			</div>
			<hr>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn btn-success">Submit</button>
								<a href="<?= base_url('peminjaman'); ?>" class="btn btn-inverse">Cancel</a>
								

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
