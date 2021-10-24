<div class="content-header row"></div>
<div class="content-body">
    <section class="row flexbox-container">
        <div class="col-xl-3 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded shadow">
                <div class="card px-2">
                    <div id="loginform">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0 font-weight-bold">Sign In</h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <?=$this->session->flashdata('error');?>
                                <form method="post" enctype="multipart/form-data" action="<?=base_url()?>login/auth/">
                                    <fieldset class="form-label-group form-group position-relative has-icon-left form-input">
                                        <input type="text" class="form-control" id="input-username" name="username" placeholder="<?= lang("ctn_303") ?>" autofocus>
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="input-username"><?= lang("ctn_303") ?></label>
                                        <div class="invalid-feedback"></div>
                                    </fieldset>
    
                                    <fieldset class="form-label-group position-relative has-icon-left form-input">
                                        <input type="password" class="form-control" id="input-password" name="password" placeholder="<?= lang("ctn_180") ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="input-password"><?= lang("ctn_180") ?></label>
                                        <div class="invalid-feedback"></div>
                                    </fieldset>
    
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div class="text-left"></div>
                                        <div class="text-right">
                                            <a href="javascript:void(0);" id="to-recover" class="text-dark card-link"><i class="feather icon-lock"></i> Lupa Password ?</a>
                                        </div>
                                    </div>
    
                                    <button type="submit" class="btn btn-danger btn-submit w-100">
                                        <span class="spinner-grow spinner-grow-sm d-none btn-spinner" id="status" role="status" aria-hidden="true"></span>
                                        <span class="btn-text">Masuk</span>
                                    </button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <div id="recoverform" style="display: none;">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="mb-0 font-weight-bold"><?= lang("ctn_174") ?></h4>
                            </div>
                            <a href="javascript:void(0)" id="to-login" class="text-dark float-right"><i class="feather icon-x"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <p class="small text-justify"><?= lang("ctn_175") ?></p>
                                <?= form_open('login/forgotpw/', ['class' => 'default-form']); ?>
                                    <fieldset class="form-label-group form-group position-relative has-icon-left form-input">
                                        <input type="text" class="form-control" id="input-email" name="email" placeholder="Email address" autofocus>
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="input-email">Email Address</label>
                                        <div class="invalid-feedback"></div>
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary btn-submit w-100">
                                        <span class="spinner-grow spinner-grow-sm d-none btn-loading" role="status" aria-hidden="true"></span>
                                        <span class="btn-text">Reset</span>
                                    </button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>