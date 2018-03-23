  
<div class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 ">
  <nav class="navbar">
    <div class="text-center">
      <a class="navbar-brand" href="#">Controle de Filmes e Jogos</a>
    </div>
  </nav>
  <a class="my-2 my-lg-0" href="<?=base_url()?>dashboard/logout"><button class="btn btn-primary pull-right">Sair</button></a>
</div>


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