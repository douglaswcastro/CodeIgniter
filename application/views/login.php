  <link href="<?= base_url(); ?>assets/css/signin.css" rel="stylesheet">
  
  <div class="text-center  container">
    <form class="form-signin" action="<?= base_url() ?>dashboard/logar" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Acesso Restrito</h1>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus maxlength="100">
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required maxlength="45">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy;Desenvolvido por: Douglas Willian de Castro <?php echo date('Y') ?>. Todos Direitos Reservados</p>
    </form>
  </div>
