<?php echo open_bootstrap("Kategori Produk"); ?>
<?php echo header_table_open("user/kategori"); ?>
<?php echo set_column("No","Nama Kategori","Tanggal Dibuat","Status") ?>	
<tr>
	<td>1</td>
	<td>Pakaian</td>
	<td>January 01, 1985</td>
	<td>
		<div class="btn-group btn-group-xs">
			<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
			<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
		</div>
	</td>
</tr>	
<?php echo header_table_close(); ?>
<?php echo close_bootstrap(); ?>