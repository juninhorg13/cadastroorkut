<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orkut - Cadastro</title>
</head>

<body>
    <div>
        <header>
            <h1>Junte-se a nós! Crie aqui o seu perfil no orkut!</h1>
        </header>
    </div>

    <div>
        <form method='post' action='incluir.php'>
            <input type="text" name="user"><br>
            <input type="text" name="nome"><br>
            <input type="email" name="email"><br>
            <input type="password" name="senha"><br>

            <input type="submit">
        </form>
    </div>


    <div>
        <footer>
            <h5>Desenvolvido por @juninhosouzaof como projeto do Curso Técnico em Informática do SENAC RJ.</h5>
        </footer>
    </div>

<?php

$submit = $_POST['submit'];



?>
</body>

</html>


