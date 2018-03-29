  

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url() ?>">Dashboard</a>
  <div class="col-md-2">
    <div class="row">
      <ul class="navbar-nav px-9">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href=""><span data-feather="user"></span> Olá, <?= $this->session->userdata['nome'] ?></a>          
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url('dashboard/logout') ?>"><span data-feather="log-out"></span>Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 



<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() ?>">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Usuario">
              <span data-feather="user"></span>
              Usuários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Filme">
              <span data-feather="video"></span>
              Filmes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Jogo">
              <span data-feather="monitor"></span>
              Jogos
            </a>
          </li>
        </ul>
      </div>
    </nav>