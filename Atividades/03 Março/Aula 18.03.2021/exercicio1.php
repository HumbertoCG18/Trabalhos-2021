<?php

//parte 1
$V1 = 40;
$V2 = 35;
$V3 = 9.5;
$V4 = 35;

$soma = $V1+$V2+$V3+$V4;

//parte 2
$nota1 = 9.9;
$nota2 = 10;

$MA = (($nota1+$nota2)/2);

//parte 3
$anoatual = 2021;
$anodenascimento = 2002;

$idade = $anoatual - $anodenascimento;

//parte 4
$parcela = 100;
$acrescimo = (100/100)*15;

$valorfinal = $parcela + $acrescimo;

//parte 5
$N1 = 105;
$N2 = 80;
$N3 = 90;
$N4 = 51;
$N5 = 79;
$N6 = 98;

$media = ($N1+$N2+$N3+$N4+$N5+$N6)/6;

//apresenta os resultados na tela
echo 'Soma: '.$soma.'<br>';
echo 'Nota Final: '.$MA.'<br>';
echo 'Idade: '.$idade.'<br>';
echo 'Valor da parcela: R$ '.$valorfinal.'<br>';
echo 'Média: '.$media.'<br>';
?>
