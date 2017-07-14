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
<script type="text/javascript" src="<?php echo base_url('source/js/dropzone/dropzone.min.js') ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('source/css/dropzone.min.css') ?>">
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
					
					<textarea class="form-control" name="deskripsi"></textarea>
				</div>
				<div class="form-group">
					<label>Petunjuk Perawatan</label>					
					<textarea class="form-control" name="perawatan"></textarea>
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
				
				<div class='form-group'>
					<label>Media</label>
					<div>
						<div role="tabpanel">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Upload Gambar</a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pilih Foto</a></li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">
									<div class="dropzone">
										<div class="dz-message">
											<h3> Klik atau Drop file disini</h3>
										</div>
									</div>    
									<span class='help-block'></span>
								</div>
								<div role="tabpanel" class="tab-pane" id="profile">
									<span class="btn btn-warning btn-xs" onclick="reload_table()">REFRESH</span>
									<br><br>
									<div class="table-responsive">
										<table id="table" class="table" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Thumbnail</th>					      
													<th>Note</th>
													<th>Mime</th>      
													<th>Pilih</th>
												</tr>
											</thead>
											<tbody>
												 <?php if ($list<>0): ?>
											      <?php foreach ($list as $key => $gal): ?>
											        <?php 
											          $link=gallery_base($gal->directory)."/".$gal->enc_name."_thumb".$gal->mime; 
											        ?>
											        <tr>
											          
											          <td><?php echo "<img src='".cek_mime($gal->mime,$link)."' class='img-thumb'>" ?></td>
											          <td><?php echo $gal->note; ?></td>        
											          <td><?php echo $gal->mime; ?></td>
											          <td><?php echo $gal->file_name ?></td>
											        </tr>
											      <?php endforeach ?>
											    <?php endif ?>
											</tbody>  
										</table>
									</div>
								</div>
							</div>
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