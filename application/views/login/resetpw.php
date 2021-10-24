<div class="content-header row"></div>
<div class="content-body">
    <section class="row flexbox-container">
        <div class="col-xl-3 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded">
                <div class="card px-2">
					<div class="card-header pb-1">
						<div class="card-title">
							<h4 class="mb-0 font-weight-bold"><?= lang("ctn_185") ?></h4>
						</div>
					</div>
					<div class="card-content">
						<div class="card-body pt-1">
							<p class="small text-justify"><?= lang("ctn_186") ?></p>
							<?= form_open(site_url('login/resetpw/' . $token . '/' . $userid), ['class' => 'default-form']); ?>

								<fieldset class="form-label-group position-relative has-icon-left form-input">
									<input type="password" class="form-control" id="input-password" name="password" placeholder="<?= lang("ctn_187") ?>">
									<div class="form-control-position">
										<i class="feather icon-lock"></i>
									</div>
									<label for="input-password"><?= lang("ctn_187") ?></label>
									<div class="invalid-feedback"></div>
								</fieldset>

								<fieldset class="form-label-group position-relative has-icon-left form-input">
									<input type="password" class="form-control" id="input-confirm_password" name="confirm_password" placeholder="<?= lang("ctn_188") ?>">
									<div class="form-control-position">
										<i class="feather icon-lock"></i>
									</div>
									<label for="input-confirm_password"><?= lang("ctn_188") ?></label>
									<div class="invalid-feedback"></div>
								</fieldset>

								<button type="submit" class="btn btn-danger btn-submit w-100">
									<span class="spinner-grow spinner-grow-sm d-none btn-loading" role="status" aria-hidden="true"></span>
									<span class="btn-text"><?= lang("ctn_185") ?></span>
								</button>
							<?= form_close(); ?>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
</div>