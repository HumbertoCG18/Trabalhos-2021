<form method="POST">
<input type="text" name="Valor" >
<input type="submit">
</form>

<?php

$tab = 0;
if(isset($_POST["Valor"])){
    $tab = $_POST["Valor"];
    
    if(!is_numeric($tab)) {
        echo "<br>O valor informado não é um número.<br>";
    }
    
    else {

    $num=0;
    while($num<=10){
        echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
        $num++;
     }

    }
}

?>

