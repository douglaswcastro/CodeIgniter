    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <label class="navbar-brand col-sm-3 col-md-2 mr-0 text-center">CodeIgniter</label>
      <label class="navbar-brand col-sm-3 col-md-9 mr-0 text-center"><?php echo date('d/m/y H:i') ?></label>

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
              
            </ul>

           
          </div>
        </nav>