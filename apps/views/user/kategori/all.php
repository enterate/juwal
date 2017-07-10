<?php echo open_bootstrap("Kategori Produk"); ?>
<?php echo header_table_open("user/kategori"); ?>
<?php echo set_column("No","Nama Kategori","Tanggal Dibuat","Status") ?>	
<?php if ($list<>0):?>
	<?php foreach ($list as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value->nama_kategori ?></td>
			<td><?php echo $value->created_at ?></td>
			<td>
				<div class="btn-group btn-group-xs">
					<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
					<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
				</div>
			</td>
		</tr>			
	<?php endforeach ?>
<?php endif ?>

<?php echo header_table_close(); ?>
<?php echo close_bootstrap(); ?>