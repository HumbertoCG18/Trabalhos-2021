<?php

include_once 'C:\xampp\htdocs\Sites\Cartilha\Include\_Db.php';
include_once '_Head.php';

$sql = "SELECT * FROM Artigos";
$resultado = mysqli_query($conn,$sql);
$total = mysqli_num_rows($resultado);

include_once '_menu.php';
?>

    <main>
        <h2>Administração dos Artigos</h2>

        <a href="artigo-salvar.php">Inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>ArtigoID</th>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Autor</th>
                <th>Tags</th>
                <th>Data</th>
                <th>Imagem</th>
                <th>Artigo</th>
                <th>Ações</th>
            </tr>

            <?php

            if ($resultado) {
                while ($dado = mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $dado['ArtigoID'];?></td>
                <td><?php echo $dado['Titulo'];?></td>
                <td><?php echo $dado['Subtitulo'];?></td>
                <td><?php echo $dado['Autor'];?></td>
                <td><?php echo $dado['Tags'];?></td>
                <td><?php echo $dado['Data'];?></td>
                <td><?php echo $dado['Imagem'];?></td>
                <td><?php echo $dado['Artigo'];?></td>
                <td><a href="artigo-processa.php?acao=excluir&id=<?php echo $dado['ArtigoID'];?>">Excluir</a></td>  
            </tr>
            <?php

                }
            }else{
            ?>
            <tr>
                <td colspan="5">Resultados não encontrados</td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="9">Total de Registros: <?php echo $total;?></td>
            </tr>
        </table>
    </main>

<?php
include_once '_footer.php';
?>