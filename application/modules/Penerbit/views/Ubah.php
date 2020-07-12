<div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-block">
							<?=form_open('penerbit/update/'.$penerbit['penerbit_id']);?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">ID penerbit</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="penerbit_id" value="<?= $penerbit['penerbit_id'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Nama Penerbit</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="penerbit_nama" value="<?=$penerbit['penerbit_nama']?>"> </div>
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
													
													<textarea class="form-control" id="penerbit_alamat" name="penerbit_alamat" value="<?=$penerbit['penerbit_alamat']?>" required></textarea>
                                                    
												</div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">No. Telp</label>
                                                    <div class="col-md-9">
													<input type="text" class="form-control" name="penerbit_telp" value="<?=$penerbit['penerbit_telp']?>" required>
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
                                                        <a href="<?= base_url('penerbit')?>" class="btn btn-inverse">Cancel</a>
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
