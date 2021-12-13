<?php

include_once 'C:\xampp\htdocs\Sites\Cartilha\Include\_Db.php';

$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM Artigos WHERE ArtigoID
         = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./artigo-lista.php');

        break;

    case 'salvar':

        $titulo = $_POST['Titulo'];
        $subtitulo = $_POST['Subtitulo'];

        if( !isset($_POST['id']) || empty($_POST['id'])){

            $sql = "INSERT INTO `Artigos`(`Titulo`, `Subtitulo`, `Autor`, `Datas`, `Tags`) VALUES ('".$titulo."', '".$subtitulo."')";
        }else{
            $sql = "UPDATE `artigo` SET `nome`='".$titulo."', `descricao`='".$subtitulo."' WHERE `ArtigoID`='".$id."' ";
        }

        mysqli_query($conn, $sql);
        
        header('location: ./artigo-lista.php');

        break;
    
    case 'salvar':

        $titulo = $_POST['nome'];
        $subtitulo = $_POST['descricao'];

        if($_FILES['foto']['size'] > 0){
            $uploaddir = '../Imagens/categorias/';

            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

            $nomearquivo = 'categoria-'.$id.'-'.rand().'.'.$extensao;

            $uploadfile = $uploaddir . $nomearquivo;

            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        }else{
            $nomearquivo = $_POST['imagem'];
        }

        mysqli_query($conn, $sql);
        
        header('location: ./artigo-lista.php');

        break;
}