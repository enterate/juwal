<?php echo open_bootstrap("<h1>Hallo Fatchul</h1>"); ?>
<br>
<p>Berikut tips untuk Anda</p>

<div class="alert alert-info fade in nomargin">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4>29 Hari lagi akun gratis anda akan habis.</h4>
	
	<p>
		<button type="button" class="btn btn-success">Berlangganan Sekarang</button>

	</p>
</div>
<br>
<div class="alert alert-success fade in nomargin">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4>Tambah produk untuk memulai penjualan!</h4>
	<p>
		Untuk membuka toko Anda, tambahkan produk anda
	</p>
	<p>		
		<a href="<?= base_url() ?>user/produk/add" class="btn btn-danger">Tambah Produk</a>
	</p>
</div>
<br>
<div class="alert alert-default fade in nomargin">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4>Sinkronisasi Akun Marketplace Anda</h4>
	<p>
		anda dapat melakukan sinkronisasi akun marketplace yang anda miliki sehingga mempermudah anda untuk mengelola toko dan produk anda.
	</p>
			
		<div class="container" style="padding-top: 30px">
			<div class="row portfolio">
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?= base_url() ?>source/ico/bukalapak.png" alt="The awesome description" data-toggle="modal" data-target="#myModal">
						<div class="caption">
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?= base_url() ?>source/ico/tokopedia.png" alt="The awesome description" data-toggle="modal" data-target="#myModal">
						<div class="caption">
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?= base_url() ?>source/ico/matahari.png" alt="The awesome description" data-toggle="modal" data-target="#myModal">
						<div class="caption">
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?= base_url() ?>source/ico/berry.jpg" alt="The awesome description" data-toggle="modal" data-target="#myModal">
						<div class="caption">
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?= base_url() ?>source/ico/blanja.png" alt="The awesome description" data-toggle="modal" data-target="#myModal">
						<div class="caption">
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
	<?php echo close_bootstrap(); ?>