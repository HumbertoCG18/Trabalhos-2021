<?php
$nome = strtoupper( trim($_POST['nome']) );
$email = strtolower( trim($_POST['email' ]) );
$data = $_POST['data'];

$numRand = rand(100,999);
$nomeSenha = strtolower(substr($nome,0,4) );
$diaNasc = substr($data,8,2);
$mesNasc = substr($data,5,2);

$senha = $nomeSenha.$diaNasc.$mesNasc.$numRand;



echo "Nome: {$nome}", '<br>';
echo "E-mail: {$email}", '<br>';
echo "Data Nascimento: {$data}", '<br>';
echo "Senha: {$senha}";

?>