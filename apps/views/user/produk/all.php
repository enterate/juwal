<style type="text/css">
	.small{
		width: 100px;
	}
	@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

	.mt40 { margin-top: 40px; }

	.panel { position: relative; overflow: hidden; display: block; border-radius: 0 !important;  }
	.panel-default { border-color: #ebedef !important; }
	.panel .panel-body { position: relative; padding: 0 !important; overflow: hidden; height: auto; }
	.panel .panel-body a { overflow: hidden; }
	.panel .panel-body a img { display: block; margin: 0; width: 100%; height: auto; 
		transition: all 0.5s; 
		-moz-transition: all 0.5s; 
		-webkit-transition: all 0.5s; 
		-o-transition: all 0.5s; 
	}
	.panel .panel-body a.zoom:hover img { transform: scale(1.3); -ms-transform: scale(1.3); -webkit-transform: scale(1.3); -o-transform: scale(1.3); -moz-transform: scale(1.3); }
	.panel .panel-body a.zoom span.overlay { position: absolute; top: 0; left: 0; visibility: hidden; height: 100%; width: 100%; background-color: #000; opacity: 0; 
		transition: opacity .25s ease-out;
		-moz-transition: opacity .25s ease-out;
		-webkit-transition: opacity .25s ease-out;
		-o-transition: opacity .25s ease-out;
	}     
	.panel .panel-body a.zoom:hover span.overlay { display: block; visibility: visible; opacity: 0.55; -moz-opacity: 0.55; -webkit-opacity: 0.55; filter: alpha(opacity=65); -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=65)"; }  
	.panel .panel-body a.zoom:hover span.overlay i { position: absolute; top: 45%; left: 0%; width: 100%; font-size: 2.25em; color: #fff !important; text-align: center;
		opacity: 1;
		-moz-opacity: 1;
		-webkit-opacity: 1;
		filter: alpha(opacity=1);    
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
	}
	.panel .panel-footer { padding: 8px !important; background-color: #f9f9f9 !important; border-bottom-right-radius: 0 !important; border-bottom-left-radius: 0 !important; }	
	.panel .panel-footer h4 { display: inline; font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #34495e margin: 0 !important; padding: 0 !important; }
	.panel .panel-footer i.glyphicon { display: inline; font-size: 1.125em; cursor: pointer; }
	.panel .panel-footer i.glyphicon-thumbs-up { color: #1abc9c; }
	.panel .panel-footer i.glyphicon-thumbs-down { color: #e74c3c; padding-left: 5px; }
	.panel .panel-footer div { width: 15px; display: inline; font: 300 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #34495e; text-align: center; background-color: transparent !important; border: none !important; }	

	.modal-title { font: 400 normal 1.625em "Roboto",Arial,Verdana,sans-serif; }
	.modal-footer { font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 

/*!
 * Lightbox for Bootstrap 3 by @ashleydw
 * https://github.com/ashleydw/lightbox
 *
 * License: https://github.com/ashleydw/lightbox/blob/master/LICENSE
 */.ekko-lightbox-container{position:relative}.ekko-lightbox-nav-overlay{position:absolute;top:0;left:0;z-index:100;width:100%;height:100%}.ekko-lightbox-nav-overlay a{z-index:100;display:block;width:49%;height:100%;padding-top:45%;font-size:30px;color:#fff;text-shadow:2px 2px 4px #000;opacity:0;filter:dropshadow(color=#000000,offx=2,offy=2);-webkit-transition:opacity .5s;-moz-transition:opacity .5s;-o-transition:opacity .5s;transition:opacity .5s}.ekko-lightbox-nav-overlay a:empty{width:49%}.ekko-lightbox a:hover{text-decoration:none;opacity:1}.ekko-lightbox .glyphicon-chevron-left{left:0;float:left;padding-left:15px;text-align:left}.ekko-lightbox .glyphicon-chevron-right{right:0;float:right;padding-right:15px;text-align:right}.ekko-lightbox .modal-footer{text-align:left}
</style>

	<!--  -->
	<?php echo open_bootstrap("BARANG DAGANGAN ANDA"); ?>
	<div class="container mt40">
		<section class="row">
			<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-4">							
						</div>
						<div class="col-md-8">
							<div class="toolbar-btn-action">
								<a class="btn btn-success" href="<?= base_url(); ?>user/produk/add"><i class="fa fa-plus-circle"></i> Add new</a>
								<a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
								<a class="btn btn-primary"><i class="fa fa-refresh"></i> Update</a>
							</div>
						</div>
					</div>
				</div>
				<br>
			<article class="col-xs-12 col-sm-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
						<img src="<?= base_url() ?>source/ico/kaft.png" alt="Nature Portfolio" />
							<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
						</a>
					</div>
					<div class="panel-footer">
						<img src="<?= base_url() ?>source/ico/tokopedia.png" alt="Nature Portfolio" class="small"/>
						<img src="<?= base_url() ?>source/ico/berry.jpg" alt="Nature Portfolio" class="small"/>
					</div>
				</div>
			</article>

			<article class="col-xs-12 col-sm-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
						<img src="<?= base_url() ?>source/ico/kaftan.png" alt="Nature Portfolio" />
							<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
						</a>
					</div>
					<div class="panel-footer">
						<img src="<?= base_url() ?>source/ico/matahari.png" alt="Nature Portfolio" class="small"/>
						<img src="<?= base_url() ?>source/ico/berry.jpg" alt="Nature Portfolio" class="small"/>
					</div>
				</div>
			</article> 

			<article class="col-xs-12 col-sm-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
						<img src="<?= base_url() ?>source/ico/lace.png" alt="Nature Portfolio" />
							<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
						</a>
					</div>
					<div class="panel-footer">
						<img src="<?= base_url() ?>source/ico/bukalapak.png" alt="Nature Portfolio" class="small"/>
					</div>
				</div>
			</article>


		</section>
	</div>
	<?php echo close_bootstrap(); ?>
	<!--  -->
	

		<script type="text/javascript">
			$(document).ready(function() {              
				$('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
					var $this = $(this),
					c = $this.data('count');    
					if (!c) c = 0;
					c++;
					$this.data('count',c);
					$('#'+this.id+'-bs3').html(c);
				});      
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					$(this).ekkoLightbox();
				});                                        
			}); 

		</script>