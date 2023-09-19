<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="box">
    <h1>Cadastro</h1>
    <hr>
    <form action="cadastro-processa.php" method="POST" enctype="multipart/form-data">
        <ul>
            
                <label>Nome Completo:</label><br>
                <input type="text" name="nome" /><br><br>
            
                <label>Idade:</label><br>
                <input type="text" name="idade" /><br><br>
            
                <label>Foto:</label><br>
                <input type="file" name="foto" value="0" />

                <br><br><br>
                <input type="submit" value="Cadastrar" />
        </ul>
        </div>
    </div>
</form>
</body>
</html>