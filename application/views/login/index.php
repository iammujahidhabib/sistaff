<?php $this->load->view('template/login/header');?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <?php $this->load->view($content);?>
    </div>
</div>
<?php $this->load->view('template/scroll-top');?>
<?php $this->load->view('template/login/js');?>
<?php $this->load->view('template/service-worker'); ?>
<?php $this->load->view('template/footer');?>