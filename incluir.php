<?php

include('connect.php');

$user = $_POST['user'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

    $adicionar = "INSERT INTO orkut(user, nome, email, senha) VALUES('".$user."', '".$nome."', '".$email."', '".$senha."') ";
        
    $insercao = mysqli_query($connectdb, $adicionar);

        if ($insercao) {
            echo "Perfil criado com sucesso! </br>";
        } else {
            echo "Ops! Acho que ficou faltando alguma coisa. Tente novamente </br>";
        }
?>