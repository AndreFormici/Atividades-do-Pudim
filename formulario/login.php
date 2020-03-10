<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="valida.php" method="POST">
        <div class="form-group text-left">
            <label for="nome" >Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group text-left">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-outline-success mt-3">Logar</button>
        </div>
    </form>
</body>
</html>