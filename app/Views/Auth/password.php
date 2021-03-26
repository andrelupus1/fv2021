<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?=base_url('')?>" class="h1"><img
          class="img-logo"
          src="<?=$page_path.'/img/logo.png'?>"
          width="100%">
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">
        Você está a apenas um passo de sua nova senha, recupere sua senha agora.</p>
      <form action="login.html" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirma Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button type="submit" id="btnSubmit" class="btn btn-primary ">Salvar Senha</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a
          href="<?=base_url('login')?>">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>