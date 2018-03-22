

<div  class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Novo Usuário</h1>
</div>
<div class="col-md-12">
    <form class="form-control" action="<?= base_url() ?>usuario/cadastrar" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label> 
            <input class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required="" type="text" maxlength="50"/> 
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="cpf">CPF:</label> 
                    <input class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" onkeypress="formatar(this,'000.000.000-00')" required="" type="" maxlength="14"/> 
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="endereco">Endereço:</label> 
                    <input class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." required="" type="text" maxlength="50"/> 
                </div>
            </div>
            <div class="col-md-2">
                <label for="nivel">Nível: </label> 
                <select class="form-control" id="nivel" name="nivel" required=""> 
                    <option value=""> --- </option> 
                    <option value="1"> Administrador </option> 
                    <option value="2"> Usuário </option> 
                </select> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label> 
                    <input class="form-control" id="email" name="email" placeholder="Informe o email..." required="" type="email" maxlength="100"/> 
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="senha">Senha: </label> 
                    <input class="form-control" id="senha" name="senha" placeholder="Informe a senha..." required="" type="password" maxlength="45"/> 
                </div>
            </div>
            <div class="col-md-2">
                <label for="status">Status: </label> 
                <select class="form-control" id="status" name="status" required=""> 
                    <option value=""> --- </option> 
                    <option value="1"> Ativo </option> 
                    <option value="2"> Inativo </option> 
                </select> 
            </div>
        </div>
        <div style="text-align: right;">
            <button class="btn btn-primary" type="submit">Salvar</button> 
            <button class="btn btn-default" type="reset">Limpar Campos</button> 
        </div>
            <br>
        </form>
    </div>

