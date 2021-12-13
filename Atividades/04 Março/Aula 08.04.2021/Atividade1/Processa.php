<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($a) && !empty($b) ) {
      if($op == '/'){
         $c = $a/$b;
      }else{ 
         $c = $a/$b;
      }
      echo "A velocidade média é: $c Km/h";
   } else{
      echo "É necessário preencher os valores";
   }

?>    