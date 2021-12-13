<?php
    $pagina = "Página Principal";
?>

<!DOCTYPE html>
     <html lang="en">
     <?php
     include_once './include/_header.php';
     ?>

    <body onload="Perguntar()":>
    <?php
     include_once './include/_menu.php';
    ?>

      <h1 class="titulo"> <?php echo $pagina;?></h1>
      <h2 id="alerta">Dados</h2>
      <button>Clique Aqui</button>
    
    <?php
     include_once './include/_footer.php';
     ?>
    
    </body>
</html>