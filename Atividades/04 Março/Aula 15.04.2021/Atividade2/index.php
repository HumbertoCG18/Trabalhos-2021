<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Calculadora de Média</title>
    
</head>
<body>
<div class="container">
    <div class="box">
        <h1>Calculadora de Média</h1>
    <form action="processa.php" method="post">
    
    <ul> 
       <li>
          <input type="text" name="Nome" placeholder="Nome" required><br><br>     
       </li>

       <li>
          <input type="text" name="Turma" placeholder="Turma" required><br><br>      
       </li>
       
       <li>
          <input type="text" name="Nota1" placeholder="Nota primeiro trimestre" required><br><br>      
       </li>
       
       <li>
          <input type="text" name="Nota2" placeholder="Nota segundo trimestre" required><br><br>      
       </li>
       
       <li>
          <input type="text" name="Nota3" placeholder="Nota terceiro trimestre" required><br><br>      
       </li>

       <li>
        <input type="submit" value="Validar">
       </li>    
    </ul>

    </div>
</div>
</from>
</body>
</html>