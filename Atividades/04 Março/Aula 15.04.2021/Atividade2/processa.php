<?php

$Nome = $_POST['Nome'];
$Turma = $_POST['Turma'];
$Nota1 = $_POST['Nota1'];
$Nota2 = $_POST['Nota2'];
$Nota3 = $_POST['Nota3'];
$media= ( $Nota1 + $Nota2 + $Nota3 )/3;

if ($media<6.5)
echo "O Aluno $Nome da turma $Turma Foi Reprovado.";

else {
    echo "O Aluno $Nome da turma $Turma Foi Aprovado.";
}
?>    