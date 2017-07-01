<?php $this->load->view('template/back/header') ?>
    <body class="fixed-left">
	<?php $this->load->view('template/back/fix-left') ?>
	<div id="wrapper">		
    <?php $this->load->view('template/back/top') ?>
    <?php $this->load->view('template/back/left-menu') ?>        
    <?php $this->load->view('template/back/right-side') ?>
        <div class="content-page">			
            <div class="content">
				
				<?php $this->load->view($body); ?>
				            <!-- Footer Start -->
            <?php $this->load->view('template/back/footer') ?>         	
            </div>		
        </div>
	</div>
	
	<?php $this->load->view('template/back/script') ?>