<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-block">
			<?=form_open('petugas/update/'.$petugas['pet_id']);?>
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">ID petugas</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pet_id" value="<?= $petugas['pet_id'] ?>"
									readonly></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Nama petugas</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pet_nama"
									value="<?=$petugas['pet_nama']?>"> </div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tanggal Lahir</label>
							<div class="col-md-9">
								<input type="date" class="form-control" name="pet_lahir"
									value="<?= $petugas['pet_lahir'] ?>"></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Jenis Kelamin</label>
							<div class="col-md-4">
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
					<!--/span-->
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Alamat</label>
							<div class="col-md-9">

								<textarea class="form-control" id="petugas_alamat" name="pet_alamat"
									value="<?=$petugas['pet_alamat']?>" required></textarea>

							</div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">No. Telp</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="pet_telp"
									value="<?=$petugas['pet_telp']?>" required>
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Email</label>
							<div class="col-md-9">

								<input class="form-control" id="email" type="email" name="email"
									value="<?=$petugas['email']?>" required>

							</div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Password</label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="password"
									value="<?=$petugas['password']?>" required>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Role</label>
							<div class="col-md-9">
							<select name="role" class="form-control">
																				<?php 
																				$role = array('Admin','Pustakawan');
																				foreach($role as $g)
																				{
																					$selected = ($g == $buku['role']) ? ' selected="selected"' : "";

																					echo '<option value="'.$g.'" '.$selected.'>'.$g.'</option>';
																				} 
																				?>
													</select>
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
								<a href="<?= base_url('petugas')?>" class="btn btn-inverse">Cancel</a>
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
