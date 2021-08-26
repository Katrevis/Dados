<?php

$nome = filter_input(INPUT_GET, 'nome');
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);



if($nome && $email && $idade) {
    echo 'NOME: '.$nome;
    echo 'EMAIL:'.$email;
    echo 'IDADE:'.$idade;
}else {
    header("Location: index.php");
    exit;
}