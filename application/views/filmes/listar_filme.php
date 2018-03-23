<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">	
		<h1 class="h2">Filmes</h1>
		<div class="col-md-2">
			<a class="btn btn-primary btn-block" href="<?= base_url();?>filme/cadastro">Novo Filme</a> </div>
		</div>

		<div class="col-md-12">
			<table class="table"> <tbody>
				<tr> 
					<th class="text-hide">Id</th> 
					<th>Nome</th> 
					<th>Genero</th> 
					<th></th> 
				</tr>
				<?php foreach($filmes as $usu){ ?>
				<tr> 
					<td class="text-hide"><?= $usu->id;?></td> 
					<td><?= $usu->nome;?></td> 
					<td><?= $usu->genero;?></td> 
					<td style="text-align: right;">
					<a class="btn btn-primary btn-group" href="<?= base_url('filme/atualizar/'.$usu->id)?>"><i class="icon-user icon-white"></i></i>Atualizar</a> 
					<a class="btn btn-danger btn-group" href="<?= base_url('filme/excluir/'.$usu->id)?>" onclick="return confirm('Deseja realmente excluir o usuário?');">Remover</a> 
					
					</td> 
					</tr>
				<?php }?>
					</tbody>
				</table>
		            </div>
          </div>
        </div>
      </div>
    </div>

			