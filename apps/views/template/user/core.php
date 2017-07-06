<?php $this->load->view('template/user/header') ?>
    <body class="fixed-left">
	<?php $this->load->view('template/user/fix-left') ?>
	<div id="wrapper">		
    <?php $this->load->view('template/user/top') ?>
    <?php $this->load->view('template/user/left-menu') ?>        
    <?php $this->load->view('template/user/right-side') ?>
        <div class="content-page">			
            <div class="content">
				
				<?php $this->load->view($body); ?>
				            <!-- Footer Start -->
            <?php $this->load->view('template/user/footer') ?>         	
            </div>		
        </div>
	</div>
	
	<?php $this->load->view('template/user/script') ?>