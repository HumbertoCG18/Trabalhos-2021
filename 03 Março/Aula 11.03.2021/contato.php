<?php
$pagina = "Contato";

?>

<!DOCTYPE html>
    <html lang="en">
    <?php
    include_once './include/_header.php';
    ?>
 
         <body>
        <?php
        include_once './include/_menu.php';
        ?>

            <h1 class="titulo"> <?php echo $pagina; ?> </h1>
            <form>
                <label for="fname">Primeiro Nome:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Último Nome:</label><br>
                <input type="text" id="lname" name="lname">
            </form>

            <h1 class="titulo">SELECIONE UM SETOR</h1>
            <form>
                <input type="radio" id="financeiro" name="setor" value="financeiro">
                <label for="financeiro">Financeiro</label><br>
                <input type="radio" id="duvidas" name="setor" value="duvidas">
                <label for="duvidas">Dúvidas</label><br>
                <input type="radio" id="vendas" name="setor" value="vendas">
                <label for="vendas">Vendas</label>
            </form>

            <h1 class="titulo">SUA PREFERÊNCIA DE CONTATO</h1>

            <form>
                <input type="radio" id="telefone" name="contatos" value="telefone">
                <label for="telefone">Telefone</label><br>
                <input type="radio" id="email" name="contatos" value="email">
                <label for="email">Email</label><br>
            </form>

            <h1 class="titulo">CONTATOS</h1>

            <form>
                <label for="tele">Telefone:</label><br>
                <input type="text" id="tele" name="tele"><br>
                <label for="mail">Email:</label><br>
                <input type="text" id="mail" name="mail">
            </form>

            <form>
                <label for="mens">Mensagem:</label><br>
                <input type="text" id="mens" name="mens"><br>
                <input type="submit" value="Submit">
            </form>

            <?php
            include_once './include/_footer.php';
            ?>

        <input type= 
         </body>
    </html>