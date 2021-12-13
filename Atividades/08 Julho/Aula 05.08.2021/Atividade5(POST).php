<form method="POST">


  Numero Minimo <input Type="text" name="num"/>
  <br>


  Numero Maximo <input Type="text" name="num2"/>
   <input Type="Submit">
   </form>


<?php
 
$num2 = $_POST["num2"];
$num = $_POST["num"];

while ($num <= $num2){

    $num++;
    echo '<br>';
    if($num % 2 == 1)
    echo "$num é Ímpar";
    else
    echo "$num é Par";
}

