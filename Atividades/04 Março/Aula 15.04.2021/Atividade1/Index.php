<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Pagina De Validação</title>
    
</head>
<body>
<div class="container">
    <div class="box">
        <h1>Validação</h1>
    <form action="processa.php" method="post">
    
    <ul> 
       <li>
          <input type="text" name="Nome" placeholder="Nome" required><br>     
       </li>

       <li>
          <input type="text" name="Idade" placeholder="Idade" required>      
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



