<?php $this->load->view('template/admin/header'); ?>
<?php $this->load->view('template/admin/sidebar'); ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <!-- <div class="header-navbar-shadow"></div> -->
    <div class="content-wrapper">
        <?php $this->load->view($content); ?>
    </div>
</div>
<?php $this->load->view('template/admin/js'); ?>