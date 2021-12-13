<?php
$nome= $_POST["nome"];
$idade= $_POST["idade"];
$foto = $_FILES["foto"]; 

/*Numero para guardar o arquivo */
$num = rand(1,999);

/*Guardar os arquivos dentro da página */
$pasta = "imagens/";

/*Guarda o nome do aquivo temporario */
$temporario = $_FILES['foto']['tmp_name'];

/*Define o tipo do arquivo */
$extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

/*Cria o futoro nome do arquivo */
$nomeTemp = $num.'.'.$extensao;

/*Movimentar o arquivo temporario para a pasta de destino */
move_uploaded_file($temporario, $pasta.$nomeTemp);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-processa.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Dados do Cadastro</h1>
    <hr>
    <ul>
    </ul>
    <img src="<?php echo $pasta.$nomeTemp;?>" />
    
</body>
</html>