<?php if($this->session->flashdata('sukses')) { ?>
<div class="alert alert-success alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Success!</strong> <?php echo $this->session->flashdata('sukses'); ?>           
</div>
<?php } ?>
<?php if($this->session->flashdata('gagal')) { ?>
<div class="alert alert-danger alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error!</strong> <?php echo $this->session->flashdata('gagal'); ?>           
</div>
<?php } ?>