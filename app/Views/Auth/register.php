<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="<?=base_url('')?>"
                class="h1"><img class="img-logo"
                    src="<?=$page_path.'/img/logo.png'?>"
                    width="100%">
            </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- social-auth-links -->
      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-outline-light social">
          <i class="fab fa-facebook mr-2"></i></a>
        <a href="#" class="btn btn-outline-light social">
          <i class="fab fa-google-plus mr-2"></i></a>
      </div>
      <!-- /.social-auth-links -->

      <a href="<?=base_url('login')?>"
        class="text-center">Já possuo
        conta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->