<script type="text/javascript">
		var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';
		$('#createform').on('submit', function(e)
	    {    	
	    	$.post( csrf_value, $('#createform').serialize(), function( response ) {		    
			}, 'json' );       
	    });	   
</script>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script src="<?= base_url() ?>source/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>source/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>source/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>source/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>source/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>source/js/jquery.countTo.js"></script>
	<script src="<?= base_url() ?>source/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>source/js/magnific-popup-options.js"></script>
	<script src="<?= base_url() ?>source/js/main.js"></script>
	</body>
</html>

