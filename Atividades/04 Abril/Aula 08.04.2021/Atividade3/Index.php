<!DOCTYPE HTML>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
<div class="container">
<div class="box">
<div class="calc">

   <form action="Processa.php" method="post" >
   <label>Calculadora</label><br><br>
      
      Primeiro Número: <input name="num1" type="text"><br><br>
      
      Segundo Número: <input name="num2" type="text"><br><br>
      
      <input type="submit" name="operacao" value="Somar">     
      <input type="submit" name="operacao" value="Diminuir">     
      <input type="submit" name="operacao" value="Multiplicar">     
      <input type="submit" name="operacao" value="Dividir">  
      </div>   

   </form> 
   </div>
   </div>
</body>
</html>