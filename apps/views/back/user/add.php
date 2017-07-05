<?php echo open_bootstrap("New User"); ?>
<?php echo form_open_multipart('',"class='form-horizontal'") ?> 
	
	<?php echo t_text('Name','nama') ?> 
	<?php echo t_text('Contact Person','kontak') ?>
	<?php echo t_radio('Gender','gender','L','P','Male','Female') ?>
	<?php echo t_textarea('Profil','profile') ?>	
	<?php echo t_email('Email','email') ?>
  	<?php echo t_password('Password','password') ?>
  	<?php echo t_radio('Valid Login','is_valid','1','0','Aktif','Non Aktif') ?>
  	<?php echo t_file('Foto','foto') ?>  
    <?php echo t_submit('','btn-save',"Simpan") ?>                  
</form>
<?php echo close_bootstrap(); ?>