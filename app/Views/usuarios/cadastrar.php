<div class="col-xl-4 col-md-6 mx-6 mx-auto p-5">
<div class="card">
    <div class="card-body">
    <h2>Cadastre-se</h2>
    <small>Preencha o formulário abaixo!</small>
    <form name="cadastrar" method="POST" action="<? URL ?>/usuarios/cadastrar" class="mt-4" >
        <div class="form-group">
            <label for="nome">Nome<sup class="text-danger">*</sup></label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>    
        <div class="form-group">
            <label for="email">E-mail<sup class="text-danger">*</sup></label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>    
        <div class="form-group">
            <label for="senha">Senha<sup class="text-danger">*</sup></label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>    
        <div class="form-group">
            <label for="confirmar_senha">Confirme a Senha<sup class="text-danger">*</sup></label>
            <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control" required>
        </div>    
        <div class="row">
            <div class="col">
            <input type="submit" value="Cadastrar" class="btn btn-info btn-block ">
            </div>
            <div class="col">
                <a href="#">Você tem uma conta? Faça login. </a>
            </div>
        </div>
    </form>
    </div>
</div>
</div>