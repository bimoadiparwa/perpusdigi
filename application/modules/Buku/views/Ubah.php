<div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-block">
							<?=form_open_multipart('buku/update/'.$buku['buku_id']);?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">ID Buku</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="buku_id" value="<?= $buku['buku_id'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">ISBN</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="buku_isbn" value="<?=$buku['buku_isbn']?>" readonly> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Judul Buku</label>
                                                    <div class="col-md-9">
													<input type="text" class="form-control" name="buku_judul" value="<?=$buku['buku_judul']?>" required>
												</div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Deskripsi</label>
                                                    <div class="col-md-9">
													<textarea class="form-control" id="buku_deskripsi" name="buku_deskripsi" value="<?=$buku['buku_deskripsi']?>" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
												<label class="control-label text-right col-md-3">Kategori</label>
                                                    <div class="col-md-9">
													<select name="buku_kategori" class="form-control">
														<option value="">Pilih Kategori</option>
														<?php 
																	foreach($kategori as $k)
																	{
																		$selected = ($k['kat_id'] == $buku['buku_kategori']) ? ' selected="selected"' : "";

																		echo '<option value="'.$k['kat_id'].'" '.$selected.'>'.$k['kat_nama'].'</option>';
																	} 
																	?>
													</select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
												<label class="control-label text-right col-md-3">Halaman</label>
                                                    <div class="col-md-9">
													<input type="text" class="form-control" name="buku_halaman" value="<?=$buku['buku_halaman']?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Genre</label>
                                                    <div class="col-md-9">
													<select name="genre" class="form-control">
																				<?php 
																				$genre = array('Fiksi','Non-Fiksi');
																				foreach($genre as $g)
																				{
																					$selected = ($g == $buku['genre']) ? ' selected="selected"' : "";

																					echo '<option value="'.$g.'" '.$selected.'>'.$g.'</option>';
																				} 
																				?>
													</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Rak</label>
                                                    <div class="col-md-9">
													<input type="text" class="form-control" name="kd_rak" value="<?=$buku['kd_rak']?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Penulis</label>
                                                    <div class="col-md-9">
													<select name="buku_penulis" class="form-control">
														<?php 
																	foreach($penulis as $p)
																	{
																		$selected = ($p['pen_id'] == $buku['buku_penulis']) ? ' selected="selected"' : "";

																		echo '<option value="'.$p['pen_id'].'" '.$selected.'>'.$p['pen_nama'].'</option>';
																	} 
																	?>
													</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Penerbit</label>
                                                    <div class="col-md-9">
													<select name="buku_penerbit" class="form-control">
														<?php 
																	foreach($penerbit as $p)
																	{
																		$selected = ($p['penerbit_id'] == $buku['buku_penerbit']) ? ' selected="selected"' : "";

																		echo '<option value="'.$p['penerbit_id'].'" '.$selected.'>'.$p['penerbit_nama'].'</option>';
																	} 
																	?>
													</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tahun Terbit</label>
                                                    <div class="col-md-9">
													<input type="text" class="form-control" name="buku_tahun" value="<?=$buku['buku_tahun']?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Eksampler</label>
                                                    <div class="col-md-9">
													<input type="text" class="form-control" name="buku_stock" value="<?=$buku['buku_stock']?>" required>	
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
										</div>
										
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Gambar</label>
                                                    <div class="col-md-9">
													<input type="file" class="form-control" name="buku_gambar" value="<?=$buku['buku_gambar']?>">	
													<input type="hidden" name="old_gambar"  value="<?php echo ($this->input->post('buku_gambar') ? $this->input->post('buku_gambar') : $buku['buku_gambar']); ?>">
                                                
                                                    </div>
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
                                                       <a href="<?= base_url('buku'); ?>" class="btn btn-inverse">Cancel</a>
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
