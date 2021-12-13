<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $mensagem = $_POST['mensagem'];
    
    echo "Usuário: {$nome}",'<br>';
    echo "Senha: {$email}",'<br>';
    echo "Cidade: {$cidade}",'<br>';
    echo "Estado: {$estado}",'<br>';
    echo "Mensagem: {$mensagem}",'<br>';
?>
