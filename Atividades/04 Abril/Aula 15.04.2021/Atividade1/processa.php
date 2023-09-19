<?php 

$Nome = $_POST['Nome'];
$Idade = $_POST['Idade'];

echo "Nome: {$Nome}",'<br>';


if ($Idade <18)
echo "Você é menor de idade.";

else{
    echo "Você é maior de idade";
 }
?>