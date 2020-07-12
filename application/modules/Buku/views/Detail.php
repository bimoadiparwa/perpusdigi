
<br>
<div class="container">
	<div class="row">
		<!-- Column -->
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title ml-3 mt-3" align="center"><?= $buku['buku_judul'];?></h1>
					<hr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="white-box text-center"> <img class="img-responsive ml-3"
									src="<?php echo base_url();?>assets/upload/<?= $buku['buku_gambar'];?>" alt="">
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-6">
							<h4>Ketersediaan : </h4>
							<h2> <?php if($buku['buku_stock'] > 0){echo $buku['buku_stock']; }else{} ?> <small
									class="text-success"><?php if($buku['buku_stock'] > 0){echo "Tersedia"; }else{ echo "Tidak Tersedia";} ?></small>
							</h2>

							<h4 class="box-title">Deskripsi</h4>
							<p><?= $buku['buku_deskripsi'] ?></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-12">

							<?php if($this->session->userdata('status')=='anggotalogin'): ?>
							<?= form_open_multipart('perpus/keranjang');?>
							<?php if($buku['buku_stock'] >0 ):?>
							<div class="card-body ml-3">
								<button type="submit" class="btn btn-outline-primary btn-rounded m-r-5 "
									data-toggle="tooltip" title="" data-original-title="Masukkan ke Keranjang."><i
										class="fa fa-shopping-bag"></i></button>
							</div>
							<?php else:?>
							<div class="card-body ml-3">
							<button type="submit" class="btn btn-outline-primary btn-rounded m-r-5 "
									data-toggle="tooltip" title="" data-original-title="Buku tidak tersedia." disabled><i
										class="fa fa-shopping-bag"></i></button>
							</div>
							<?php endif;?>
								
										<input type="hidden" class="form-control" id="buku_id" name="buku_id"
											value="<?= $buku['buku_id'];?>">
							
										<input type="hidden" class="form-control" id="ang_id" name="ang_id"
											value="<?= $this->session->userdata('ang_id');?>">
									
										<input type="hidden" class="form-control" id="pen_id" name="pen_id"
											value="<?= $buku['pen_id'];?>">
								
										<input type="hidden" class="form-control" id="kat_id" name="kat_id"
											value="<?= $buku['kat_id'];?>">
									
										<input type="hidden" class="form-control" id="penerbit_id" name="penerbit_id"
											value="<?= $buku['penerbit_id'];?>">
							</div>
							
							<?= 
						form_close();
						 ?>
							<?php else:?>
							<a href="<?=base_url('auth')?>" class="btn btn-outline-primary btn-rounded m-r-5 ml-3"
								data-toggle="tooltip" title="" data-original-title="Harus Login Dahulu."><i
									class="fa fa-shopping-bag"></i></a>
							<?php endif;?>
							
						</div>
						
					</div>
					<hr>
					<div class="col-lg-12 col-md-12 col-sm-12 ml-3">
						<h3 class="box-title m-t-40">Informasi Umum</h3>
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td width="390">Judul</td>
										<td><?= $buku['buku_judul'];?> </td>
									</tr>
									<tr>
										<td>Penulis</td>
										<td><?= $buku['pen_nama'];?></td>
									</tr>
									<tr>
										<td>ISBN</td>
										<td><?= $buku['buku_isbn'];?> </td>
									</tr>
									<tr>
										<td>Penerbit</td>
										<td><?= $buku['penerbit_nama'];?> </td>
									</tr>
									<tr>
										<td>Tahun Terbit</td>
										<td><?= $buku['buku_tahun'];?> </td>
									</tr>
									<tr>
										<td>Jumlah Halaman</td>
										<td><?= $buku['buku_halaman'];?> </td>
									</tr>
									<tr>
										<td>Kategori</td>
										<td><?= $buku['kat_nama'];?> </td>
									</tr>
									<tr>
										<td>Genre</td>
										<td><?= $buku['genre'];?> </td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Column -->
</div>

</div>
