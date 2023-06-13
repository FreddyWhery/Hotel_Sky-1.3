<h1 class="text-center display-4">Novo Usuário</h1>


<form action="?page=salvar" method="POST">

<input type="hidden" name="acao" value="cadastrar">

<div class="mb-3"> 
<input type="text" placeholder="Nome do Novo Usuário" maxlength="30" name="usuarioBD" class="form-control" required>
</div>

<div class="mb-3"> 
    <input type="password" placeholder="Senha do Novo Usuário" maxlength="32" name="senha" class="form-control" required>
</div>

<div class="mb-3 as"> 
<button type="submit" class="btn btn-danger form-control">Cadastrar Usuário</button>
</div>

<style>.as{margin-left: 20px;}</style>

</form>