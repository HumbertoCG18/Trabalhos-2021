<?php
$nome = @$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$experiencia = $_POST['experiencia'];
$devweb = $_POST['devweb']; 
$tecnologia = $_POST["tecnologia"];
$senioridade = $_POST["senioridade"];


echo 'Nome: '.$nome. '<br><br>';
echo 'Sobrenome: '.$sobrenome. '<br><br>';
echo 'E-mail: '.$email. '<br><br>';
echo 'Lado: '.$devweb. '<br><br>';
echo 'Senioridade: '.$senioridade. '<br><br>';
echo 'Linguagem: ';
echo '<pre>';
print_r ($tecnologia);
echo '</pre>';
echo 'Experiencia: '.$experiencia. '<br>';

?>
