<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastrar.php" method="POST">
        <div class="form-group text-left">
            <label for="nome" >Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group text-left">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group text-left">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>
        <div class="text-left">
            <fieldset class="form-check mt-3">
                <legend>Tipo de usuário</legend>
                <div>
                    <input type="radio" class="form-input" name="user" id="adm" value="1">
                    <label for="adm">Administrador</label>
                </div>

                <div>
                    <input type="radio" class="form-input" name="user" id="comum" value="0">
                    <label for="comum">Usuário comum</label>
                </div>
            </fieldset>
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-outline-success mt-3">Cadastrar</button>
        </div>
    </form>
</body>
</html>