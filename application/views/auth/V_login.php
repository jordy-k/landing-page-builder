<div class="auth-box bg-dark border-top border-secondary py-3 px-3 mx-2">
    <div>
        <div class="text-center">
            <span class="db"><img src="<?= base_url('public'); ?>/assets/images/logo.png" alt="logo" /></span>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <!-- Form -->
        <form class="form-horizontal needs-validation mt-3" method="post" action="<?= base_url('auth'); ?>">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input type="hidden" class="form-control form-control-lg" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="mdi mdi-account fs-4"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i class="mdi mdi-lock fs-4"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="" />
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="form-group">
                        <button class="btn btn-success text-white" type="submit">
                            <i class="mdi mdi-account-key fs-4 me-1"></i> Login
                        </button>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row text-center">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="form-group">
                        <a href="<?= base_url('auth/registration'); ?>">
                            <i class="mdi mdi-account-plus fs-4 me-1"></i> Register New Account
                        </a>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </form>
    </div>
</div>