<style type="text/css">
	      .file_button_container,
      .file_button_container input {
           background: transparent url(http://icons.veryicon.com/png/System/iOS7%20Minimal/Basic%20Plus.png) left top no-repeat;
           height: 200px;
           width: 200px;
       }

       .file_button_container {
           background: transparent url(http://icons.veryicon.com/png/System/iOS7%20Minimal/Basic%20Plus.png) left top no-repeat;
       }
    
       .file_button_container input {
           opacity: 0;
       }
</style>
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
							<input id="password" type="text" class="form-control" name="judul">
						</div>
						<div class="col-sm-4">
							<label>Kategori</label>
							<select class="form-control" name="id_kategori">
								<?php if ($list_kategori<>0): ?>
									<?php foreach ($list_kategori as $key => $value): ?>
										<?php echo "<option value=".$value->id_kategori.">".$value->nama_kategori."</option>" ?>
									<?php endforeach ?>
								<?php endif ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					
					<textarea class="form-control ckeditor" name="deskripsi"></textarea>
				</div>
				<div class="form-group">
					<label>Petunjuk Perawatan</label>					
					<textarea class="form-control ckeditor" name="perawatan"></textarea>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label>Bahan</label>
							<input id="password" type="text" class="form-control" name="bahan">
						</div>
						<div class="col-sm-4">
							<label>Berat (Kg)</label>
							<input type="text" class="form-control" name="berat">
						</div>
						<div class="col-sm-4">
							<label>Stok</label>
							<input type="number" min="0" class="form-control" name="stok">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" class="form-control" name="phone">
				</div>
				<div class="form-group">
					<label class="control-label" id="captchaOperation">Harga</label>
					<div class="row">
						<div class="col-sm-4">
							<input type="text" class="form-control" name="harga" />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" id="captchaOperation">Foto</label>
					<div class="row">
						<div class="col-sm-4">
							<div class="file_button_container"><input type="file" name="gambar[]" /></div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="btn-save" value="1">Simpan</button>
			</form>
		</div>
	</div>
</div>
</form>
<?php echo close_bootstrap(); ?>
<script src='<?= base_url() ?>source/libs/ckeditor/ckeditor.js'></script>