<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center bg-dark">
            <a href="<?=base_url('')?>"
                class="h1"><img class="img-logo"
                    src="<?=$page_path.'/img/logo.png'?>"
                    width="100%">
            </a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Este e-mail está...</p>
            <div class="mb-3 text-center">
                <p><?=$response?>
                </p>
            </div>
            <div class="row">
                <p class="mt-3 mb-1">
                    <a
                        href="<?=base_url('login')?>">Login</a>
                </p>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>