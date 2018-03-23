<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Atualizar Jogo</h1>
	</div>
	<div class="col-md-12">
		<form class="form-control" action="<?= base_url() ?>jogo/salvar_atualizacao" method="post">
		<input id="id" name="id" type="hidden" value="<?= $jogo[0]->id;?>" /> <br />
        <div class="form-group">
            <label for="nome">Nome:</label> 
            <input class="form-control" id="nome" value="<?= $jogo[0]->nome;?>" name="nome" placeholder="Informe o nome..." required="" type="text" maxlength="100" value/> 
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="tipo">Tipo:</label> 
                    <input class="form-control" value="<?= $jogo[0]->tipo;?>" id="tipo" name="tipo" placeholder="Informe o genero..." required="" type="" maxlength="50"/> 
                </div>
            </div>
        </div>
        <div style="text-align: right;">
            <button class="btn btn-primary" type="submit">Salvar</button> 
             
			<a href="<?=base_url()?>jogo/index"><button class="btn btn-default" type="button">Voltar</button></a>
        </div>
            <br>
        </form>
	            </div>
          </div>
        </div>
      </div>
    </div>
