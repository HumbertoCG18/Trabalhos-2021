<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Página De Login</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="style-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" id="icon" alt="User Icon" />
    </div>

   <form action="processa.php" method="post">
    <form>
      <input type="text" id="login" class="fadeIn second" name="Login" placeholder="Usuário">
      <input type="password" id="password" class="fadeIn third" name="Senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>
   </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueceu sua senha?</a>
    </div>

  </div>
</div>
</body>
</html>