        <div  class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tela Inicial</h1>
            
          </div>

          <div class=row>
            <div class="col-md-4 text-center">
            <label class="col-md-12">
              <span data-feather="user" ></span>
              Usuários Cadastrados
              </label>
              <label>
               <?= $usuario; ?>
              </label>
            </div>
            <div class="col-md-4 text-center">
             <label class="col-form-label col-md-12">
             <span data-feather="video"></span>
                Filmes Cadastrados
              </label>
              <label>
               <?= $filme; ?>
              </label>
            </div>
            <div class="col-md-4 text-center">
              <label class="col-form-label col-md-12">
               <span data-feather="monitor"></span>
                Jogos Cadastrados
              </label>
              <label>
               <?= $jogo; ?>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
