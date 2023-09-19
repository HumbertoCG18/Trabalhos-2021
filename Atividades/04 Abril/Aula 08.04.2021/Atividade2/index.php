<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
               <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        </head>

    <body>
    <div class="container">
<div class="box">

            <div id="box">
            
                <h1>Atividade 2</h1>
        <form action="processa.php" method="post">

        <form class="row g-3">
                <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nome Completo</label>
                <input type="text" name="nome" class="form-control" id="validationDefault01" placeholder="Mark" required>
            </div>

<br>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>

<br>

            <div class="form-group row">
            <label>Date</label>
                <for="example-date-input" class="col-2 col-form-label">
            <div class="col-10">
                <input class="form-control" type="date" name="data" placeholder="2004-10-19" id="example-date-input">
            </div>
            </div>

<br>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>

</div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>

</html>