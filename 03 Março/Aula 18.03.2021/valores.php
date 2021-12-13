<?php

 $valor1 = 35;
 $valor2 = 20.5;
 $pi = pi(); //variavel recebe o valor da funcao de pi

 //processamento de dados com os valores das variaveis
 $total = $valor1+$valor2;
 $subtracao = $valor1-$valor2;
 $multiplicacao = $valor1*$valor2;
 $divisao = $valor1/$valor2;
 $calculo = (($valor1+$valor2)*5)/$pi;

// escreve os valores na tela 
echo 'Soma:'.$total. '<br>';
echo 'Subtração:' .$subtracao. '<br>';
echo 'Multiplicação:' .$multiplicacao. '<br>';
echo 'Divisão:' .$divisao. '<br>';
echo 'Calculo:' .$calculo. '<br>'

?>