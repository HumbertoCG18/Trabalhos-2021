<?php
   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($a) && !empty($b)) {
      if($op == 'Somar')
         $c = $a + $b;
      else if($op == 'Diminuir')
         $c = $a - $b;
      else if($op == 'Multiplicar')
         $c = $a*$b;
      else
         $c = $a/$b;

      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   } else{
      echo "É necessário preencher os valores";
   }

?>   