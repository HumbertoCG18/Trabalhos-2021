<style>
table, th, td, tr {
  border: 3px solid black;
  border-radius: 5px;
}
</style>
 
<form action="#" method="get">
</form>
<?php
$col = 0;
$row = 0;

$sorteado = [
   1=> 4,
    62,
    24,
    82,
    75,
    32,
];

$contador = 1;
$submit = isset($_GET['submit']);
$col = 10;
$row = 10;
 
?>
 
<table>
<?php  
 
for ($linhas=1; $linhas <= $row; $linhas++) { 
 
?>
    <tr>
        <?php  
        for ($colunas=1; $colunas <= $col; $colunas++) { 
             $numero = 1;
        ?>
 
        <td style="width: 100px; background-color: <?php if (in_array($contador, $sorteado)) { echo 'lightblue'; } ?>" >&zwnj; <?php echo $contador; ?></td>
 
        <?php

        $numero++;
        $contador++;  

        }
        ?>
    </tr>
<?php  
}
?>
</table>
