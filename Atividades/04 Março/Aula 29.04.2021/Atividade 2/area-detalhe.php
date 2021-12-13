<?php
$categoria = strtoupper ($_GET['area']);

switch ($categoria) {
    case 'CN':
        $titulo="ciencias da natureza";
        $professores="Brenda e Adalberto";
        $area='correto';
        break;
    case 'CH':
            $titulo="ciencias humanas";
            $professores="Bruno e Bárbara";
            $area='correto';
        break;
        case 'LING':
            $titulo="linguagens";
            $professores="Letícia";
            $area='correto';
        break;
        case 'MAT':
            $titulo="matemática";
            $professores="Willian";
            $area='correto';
        break;
        case 'PV':
            $titulo="Projeto de Vida";
            $professores="Bruno e Bárbara";
            $area='correto';
        break; 
        case 'TEC':
            $titulo="Técnico";
            $professores="Sandro";
            $area='correto';
        break;
    default:
    $titulo='';
    $professores='';
    $area='incorreto';
        break;
}

$categoria2 = strtoupper ($_GET['prof']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura dos dados via GET</title>
</head>
<body>
    <?php
    if ($area=='correto') {
    ?>
    <ul>
        <li>Área: 
        <?php
        echo $titulo;
        ?>
        
        </li>
        <li>Profressores: 
        <?php
        echo $professores;

        ?>
        </li>
    </ul>
<?php     
    } else {
?>
    <h1>Opsss!! Opção inválida</h1>
    <?php
    }
    ?>
</body>
</html>
