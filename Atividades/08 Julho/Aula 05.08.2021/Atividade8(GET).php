<form method="GET">


  Informe o Numero<input Type="text" name="numero"/>
   <input Type="Submit">
   </form>


<?php 

$numero = (int)$_GET['numero']; 

if($numero <=10){

    for($i = 1; $i <=10; $i++)
    {
        echo "$i x $numero =".$i*$numero . "<br>";
    }

}
?>