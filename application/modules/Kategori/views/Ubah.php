<div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-block">
							<?=form_open('kategori/update/'.$kategori['kat_id']);?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">ID Kategori</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="kat_id" value="<?= $kategori['kat_id'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Nama Kategori</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="kat_nama" value="<?=$kategori['kat_nama']?>"> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                        <a href="<?= base_url('kategori')?>" class="btn btn-inverse">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?= 
								form_close();
								 ?>
                            </div>
                        </div>
                    </div>
