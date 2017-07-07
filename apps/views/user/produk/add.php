<?php echo open_bootstrap("Produk Baru"); ?>
<?php echo form_open_multipart('',"class='form-horizontal'") ?> 


<div class="col-sm-10 portlets">
	<div class="widget">
		
		<div class="widget-content padding">
			<form role="form" id="registerForm">
				
				<div class="form-group">
					<div class="row">
						<div class="col-sm-8">
							<label>Judul</label>
							<input id="password" type="password" class="form-control" name="password">
						</div>
						<div class="col-sm-4">
							<label>Kategori</label>
							<select class="form-control">
								
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					
					<textarea class="form-control">
						
					</textarea>
				</div>
				<div class="form-group">
					<label>Petunjuk Perawatan</label>
					
					<textarea class="form-control">
						
					</textarea>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label>Bahan</label>
							<input id="password" type="password" class="form-control" name="password">
						</div>
						<div class="col-sm-4">
							<label>Berat (Kg)</label>
							<input type="password" class="form-control" name="confirmPassword">
						</div>
						<div class="col-sm-4">
							<label>Stok</label>
							<input type="password" class="form-control" name="confirmPassword">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" class="form-control" name="phoneNumber">
				</div>
				<div class="form-group">
					<label class="control-label" id="captchaOperation">Harga</label>
					<div class="row">
						<div class="col-sm-4">
							<input type="text" class="form-control" name="captcha" />
						</div>
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>
</form>
<?php echo close_bootstrap(); ?>