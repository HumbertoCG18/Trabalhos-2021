<?php
$nome = @$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$experiencia = $_POST['experiencia'];
$devweb = $_POST['devweb']; 
$tecnologia = $_POST["tecnologia"];




echo 'Nome: '.$nome. '<br>';
echo 'Sobrenome: '.$sobrenome. '<br>';
echo 'E-mail: '.$email. '<br>';
echo 'Lado: '.$devweb. '<br>';
echo 'Linguagem: ';
echo '<pre>';
print_r ($tecnologia);
echo '</pre>';
echo 'Experiencia: '.$experiencia. '<br>';

?>
