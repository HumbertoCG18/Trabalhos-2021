<?php
 
$selecionado = $_GET["s"];
$counter = 0;
$max_linhas = 5;
$max_colunas = 10;
 
?>
 
<table border="1">
 
<?php
 
for ($linha = 1; $linha <= $max_linhas; $linha++) {
    if ($linha % 2 == 0) {
        $cor = "red";
    } else {
        $cor = "blue";
    }
 
    ?>
 
    <tr style="background-color: <?php echo $cor;?>">
 
    <?php
    for ($coluna = 1; $coluna <= $max_colunas; $coluna++) {
 
    $counter++;
 
    if ($counter == $selecionado) {
        $corQuadrado = "green";
    } else {
        $corQuadrado = $cor;
    }
 
    ?>
        <td style="background-color: <?php echo $corQuadrado;?>"><?php echo $counter;?></td>
    <?php
    }
    ?>
 
    </tr>
<?php
 
}
 
?>
 
</table>