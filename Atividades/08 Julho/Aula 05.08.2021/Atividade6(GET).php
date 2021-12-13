<?php
 
$min=$_GET['min'];
$max=$_GET['max'];
 
$a = $min;
if($min > $max | !is_numeric($min&$max)){
    echo "Favor corrija os valores ;)";
}

else{    
    while ($a <= $max) {
        if($min > $max | !is_numeric($min&$max)){
            echo "Favor corrija os valores ;)";
        }

        if($a % 2 == 0){
            echo "{$a} é par<br>";
        }

        else{
            echo "{$a} é impar<br>";
        }
        $a++;
    }  
}    
?>