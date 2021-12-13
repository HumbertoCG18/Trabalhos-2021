<?php

    $Nome = $_POST['Nome'];
    $Idade = $_POST['Idade'];
    $Email = $_POST['Email'];



    if($_POST['Nome'] == "")
    echo "Nome: Valor não informado",'<br>';
    else{
        echo "Nome: {$Nome}",'<br>';
    }


    if($_POST['Idade'] == "")
    echo "Idade: Valor não informado",'<br>';
    else{
        echo "Idade: {$Idade}",'<br>';
    }


    if($_POST['Email'] == "")
    echo "E-mail: Valor não informado",'<br>';
    else{
        echo "E-mail: {$Email}",'<br>';
    }



?>