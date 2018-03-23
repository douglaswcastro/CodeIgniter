<div  class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuários</h1>
		<div class="col-md-2">
			<a class="btn btn-primary btn-block" href="<?= base_url();?>usuario/cadastro">Novo Usuário</a> </div>
		</div>

		<div class="col-md-12">
			<table class="table"> <tbody>
				<tr> 
					<th class="text-hide">Id</th> 
					<th>Nome</th> 
					<th>Email</th> 
					<th>Nivel</th> 
					<th>Status</th> 
					<th></th> 
				</tr>
				<?php foreach($usuarios as $usu){ ?>
				<tr> 
					<td class="text-hide"><?= $usu->idUsuario;?></td> 
					<td><?= $usu->nome;?></td> 
					<td><?= $usu->email;?></td> 
					<td><?= $usu->nivel==1?'Administrador':'Usuário';?></td> 
					<td><?= $usu->status==1?'Ativo':'Inativo';?></td> 
					<td>
					<a class="btn btn-primary btn-group" href="<?= base_url('usuario/atualizar/'.$usu->idUsuario)?>"><i class="icon-user icon-white"></i></i>Atualizar</a> 
					<a class="btn btn-danger btn-group" href="<?= base_url('usuario/excluir/'.$usu->idUsuario)?>" onclick="return confirm('Deseja realmente excluir o usuário?');">Remover</a> 
					
					</td> 
					</tr>
				<?php }?>
					</tbody>
				</table>
				</div>
			