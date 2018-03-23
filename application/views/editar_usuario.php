<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Atualizar Usuário</h1>
	</div>
	<div class="col-md-12">
		<form action="<?= base_url() ?>usuario/salvar_atualizacao" method="post">
			<input id="idUsuario" name="idUsuario" type="hidden" value="<?= $usuario[0]->idUsuario;?>" /> <br />
			<div class="form-group">
				<label for="nome">Nome:</label> 
				<input class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required="" type="text" value="<?= $usuario[0]->nome;?>" maxlength="50"/> 
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="cpf">CPF:</label> 
						<input class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf..." required="" type="text" value="<?= $usuario[0]->cpf;?>" maxlength="14"/> 
					</div>
				</div>
				<div class="col-md-7">
					<div class="form-group">
						<label for="endereco">Endereço:</label> <input class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." required="" type="text" value="<?= $usuario[0]->endereco; ?>" maxlength="50"/> 
					</div>
				</div>
				<div class="col-md-2">
					<label for="nivel">Nível: </label> 
					<select class="form-control" id="nivel" name="nivel" required="" value="<?= $usuario[0]->nivel;?>;"> 
						<option usuario="" value="1" <?= $usuario[0]->nivel == 1?'selected':'';?>>Administrador </option> 
						<option usuario="" value="2" <?= $usuario[0]->nivel == 2?'selected':'';?>>Usuário </option> 
					</select> 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email:</label> 
						<input class="form-control" id="email" name="email" placeholder="Informe o email..." required="" type="email" value="<?= $usuario[0]->email; ?>" maxlength="100"/> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="senha">Senha: </label> 
						<input class=" btn btn-default btn-block" data-target="#myModal" data-toggle="modal" type="button" value="Atualizar Senha" /> 
					</div>
				</div>
				<div class="col-md-2">
					<label for="status">Status: </label> 
					<select class="form-control" id="status" name="status" required="" value="<?= $usuario[0]->status;?>" > 
						<option value="0"> --- </option> 
						<option usuario="" value="1" <?= $usuario[0]->status == 1?'selected':'';?>>Ativo </option> 
						<option usuario="" value="2" <?= $usuario[0]->status == 2?'selected':'';?>>Inativo </option> 
					</select> </div>
				</div>
				<div style="text-align: right;">
					<button class="btn btn-primary" type="submit">Salvar</button> 
					<button class="btn btn-default" type="reset">Limpar Campos</button> 
				</div>
			</form>
		</div>
		<br>
		<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
			<div class="modal-dialog">
				<form action="<?= base_url() ?>usuario/salvar_senha" method="post">
					<input id="idUsuario" name="idUsuario" type="hidden" value="<?= $usuario[0]->idUsuario; ?>" />
					<br />
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
							<button aria-label="Close" class="close" data-dismiss="modal" type="button">
								<span aria-hidden="true">×</span>
							</button> 
							<br />
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12 form-group">
									<label for="senha_antiga">Senha antiga:</label> <input class="form-control" id="senha_antiga" name="senha_antiga" type="password" maxlength="45" /> 
								</div>
								<div class="col-md-12 form-group">
									<label for="senha_nova">Nova Senha:</label> 
									<input class="form-control" id="senha_nova" name="senha_nova" onkeyup="checarSenha()" type="password" maxlength="45"/> 
								</div>
								<div class="col-md-12 form-group">
									<label for="senha_confirmar">Confirmar Senha:</label> <input class="form-control" id="senha_confirmar" name="senha_confirmar" onkeyup="checarSenha()" type="password" maxlength="45"/> 
								</div>
								<div class="col-md-12 form-group">
									<div id="divcheck">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type="button">Fechar</button> 
							<button class="btn btn-primary" disabled="" id="enviarsenha" type="submit">Salvar Senha</button> 
						</div>
					</div>
				</form>
			</div>
		</div>
		<script> 
			$(document).ready(function() 
			{ 
				$("#senha_nova").keyup(checkPasswordMatch); 
				$("#senha_confirmar").keyup(checkPasswordMatch); 
			}); 
			
			function checarSenha() 
			{ 
				var password = $("#senha_nova").val(); 
				var confirmPassword = $("#senha_confirmar").val(); 
				if (password == '' || '' == confirmPassword) 
					{ $("#divcheck").html("<span style='color: red'>Campo de senha vazio!</span>");
				document.getElementById("enviarsenha").disabled = true; 
			} else if (password != confirmPassword) { 
				$("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>"); 
				document.getElementById("enviarsenha").disabled = true; 
			} else 
			{ 
				$("#divcheck").html("<span style='color: green'>Senha iguais!</span>"); 
				document.getElementById("enviarsenha").disabled = false; 
			} 
		}
	</script>