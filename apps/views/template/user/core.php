<?php $this->load->view('template/user/header') ?>
    <body class="fixed-left">
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Anda yakin ingin keluar dari JUWAL.ID?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Tidak!</button>
                <a href="<?= base_url() ?>user/account/logout" class="btn btn-success md-close">Ya</a>
                </p>
            </div>
        </div>
    </div>  
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