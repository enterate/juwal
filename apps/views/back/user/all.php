<?php echo open_bootstrap(); ?>
<style type="text/css">
  .more{
    cursor: pointer;
  }
</style>
<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>
<!-- <div class="row">
  <div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Total Product</span>
      <h3 class="color-up"><?php //echo $product ?></h3>
      <span class="diff"><b class="color-up">Products </b></span>
    </li>
    <li class="col-xs-6 col-lg-2 more" onclick="list('zero')">
      <span class="title"><i class="fa fa-calendar-o"></i> Stock <= 0</span>
      <h3 class="color-down"><?php //echo $down ?></h3>
      <span class="diff"><b class="color-down">Products </b></span>
    </li>
    <li class="col-xs-6 col-lg-2 more" onclick="list('no-zero')">
      <span class="title"><i class="fa fa-shopping-cart"></i> Stock >0 </span>
      <h3 class="color-up"><?php //echo $up ?></h3>
      <span class="diff"><b class="color-up">Products </b></span>
    </li>
    <li class="col-xs-6 col-lg-2 more" onclick="list('publish')">
      <span class="title"><i class="fa fa-users"></i> Publish</span>
      <h3 class="color-up"><?php //echo $publis ?></h3>
      <span class="diff"><b class="color-up">Products </b></span>
    </li>
    <li class="col-xs-6 col-lg-2 more" onclick="list('draft')">
      <span class="title"><i class="fa fa-users"></i> Draft</span>
      <h3><?php //echo $draft ?></h3>
      <span class="diff"><b class="color-up">Products </b></span>
    </li>
    
  </ul>
  </div>
</div>

<br> -->
<a  class="btn btn-info" role="button" href="<?php echo base_url('back/user/tambah/') ?>">ADD NEW</a>
<span class="btn btn-warning" onclick="reload_table()">REFRESH</span>
<br>
<br>
<div class="row">

<div class="col-md-12">

<!-- <a class="btn btn-info" role="button" href="<?php echo base_url('user/tambah') ?>">INSERT NEW</a>
  <br/>
  <br/> -->
  <div class="table-responsive">
  <table id="table" class="table" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Email</th>
      <th>Nama</th>
      <th>Tanggal Mendaftar</th>
      
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($list<>0): ?>
      <?php foreach ($list as $key => $value): ?>
        <tr>
          <td>
            <?php echo $key+1 ?>
          </td>
          <td>
            <?php echo $value->email ?>
          </td>
          <td>
            <?php echo $value->nama ?>
          </td>
          <td>
            <?php echo $value->date_join ?>
          </td>
          <td>
            Edit
          </td>
        </tr>
      <?php endforeach ?>
    <?php endif ?>
  </tbody>  
</table>
</div>
</div>
</div>
<?php //$this->load->view('admin/template/modal') ?>
<?php echo close_bootstrap(); ?>
<script type="text/javascript">
  function reload_table()
  {
      table.ajax.reload(null,false); //reload datatable ajax 
  }
  
  function d(id){
    if(confirm('Are you sure delete this data?')){
      $.ajax({
        url : "<?php echo site_url('admin/user/delete')?>/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data){
          reload_table();
        },error: function (jqXHR, textStatus, errorThrown){
          alert('Error deleting data');}});
    }
  }

  var table;

  $(document).ready(function() {
    table = $('#table').DataTable({ 

        "processing": true, 
        "serverSide": true, 
        "order": [], 
        
        "ajax": {
            "url": "<?php echo site_url('admin/user/list_user_all')?>",
            "type": "GET"
        },

        "columnDefs": [
        { 
            "targets": [ -1 ],
            "orderable": false,
        },
        ],
    });
});

  function list(i){
    alert(i);
  }
</script>
<script src="<?= base_url(); ?>asset/js/datatables/datatables.min.js"></script>

