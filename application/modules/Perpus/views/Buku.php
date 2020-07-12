<br>
<h2>
	<center>Koleksi Buku</center>
</h2>
<hr>
<br>
<div class="container">
	<div class="row">
		<?php foreach($buku as $b) {?>
		<div class="col-md-3 buku">
			<div class="card">
				<div class="hovereffect">
					<span class="badges badges-danger"><?= $b['kat_nama']; ?></span>
					<img class="img-responsive" style="height:350px; width:100%;"
						src="<?php echo base_url();?>assets/upload/<?= $b['buku_gambar'];?>" alt="">
					<div class="overlay">
						<a href="<?= base_url('buku/detail/'.$b['buku_id']); ?>">
							<h2><i class="fa fa-eye"></i> Detail</h2>
						</a>
					</div>
				</div>
				<div class="card-block">
					<div class="card-text">
						<h5><?= $b['buku_judul'];?></h5>
						<small>
						Penulis  : <b><?= $b['pen_nama'];?></b><br>
						Penerbit : <b><?= $b['penerbit_nama'];?></b><br>
					
					</small>
						
						
					</div>

				</div>
			</div>
		</div>
		<?php }?>
	</div>
	<nav>
		<ul class="pagination">
			<!-- Pagination links -->
			<?=$pagination;?>
		</ul>
	</nav>
</div>
<br>
