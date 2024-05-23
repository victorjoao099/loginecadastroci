<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>

    <div class="msg-user">
        <h1>Ficamos felizes por seu interesse em nosso site, por favor, conceda os dados abaixo</h1>
    </div>

    <!--<?php //echo csrf_field(); 
        ?> -->

    <fieldset>
        <div class="cadastro">
            <?php echo form_open(route_to('cadastro.index')) ?>
            <div class="mb-3">
                <label for="nomeCompleto">Digite seu nome Completo</label>
                <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Digite seu email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="senha">Digite sua senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </fieldset>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>