<?php echo open_bootstrap(); ?>
<?php echo form_open_multipart('',"class='form-horizontal'") ?> 
  <?php echo t_text('Nama Kategori','nama_kategori') ?>
  <?php echo t_submit('','btn-save',"Simpan") ?>                  
</form>
<?php echo close_bootstrap(); ?>