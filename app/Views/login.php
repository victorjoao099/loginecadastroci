<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<div class="msg-user">
    <h1>Oi! Seja bem-vindo ao nosso site, por favor, entre</h1>
</div>


<form action="" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Seu email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="senha">Digite sua senha</label>
        <input type="password" class="form-control" name="senha" id="senha">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    <button type="button" class="btn btn-success" onclick="window.location.href = 'cadastro'">Cadastre-se</button>
</form>


<!-- <div class="login">
    <form action="" method="post">
        <div class="email">
            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email" placeholder="example@example.com">
        </div>
        <div class="senha">
            <label for="senha">Digite sua senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button type="submit">Entrar</button>

        <div class="cadastro">
            <p>Não é cadastrado ainda? por favor <a href="cadastro">Cadastre-se aqui</a>
        </div>
    </form>
</div> -->
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>