<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-block">
			<?=form_open_multipart('peminjaman/update/'.$peminjaman['id_peminjaman']);?>
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
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Status</label>
							<div class="col-md-9">
								<select name="status" class="form-control">
									<option value=""></option>
									<?php 
																				$status = array('Pending','Sedang Dipinjam','Sudah Dikembalikan','Dibatalkan');
																				foreach($status as $s)
																				{
																					$selected = ($s == $peminjaman['status']) ? ' selected="selected"' : "";

																					echo '<option value="'.$s.'" '.$selected.'>'.$s.'</option>';
																				} 
																				?>
								</select>
							</div>
						</div>
					</div>

				</div>


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
