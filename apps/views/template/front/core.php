<?php $this->load->view('template/front/header') ?>
<div id="page">
<?php $this->load->view('template/front/nav') ?>
<?php $this->load->view($body) ?>
<?php $this->load->view('template/front/footer') ?>
</div>
<?php $this->load->view('template/front/script') ?>