<?php
    include("conexao.php");

    $var_id = $_GET['id'];
    $arquivo = $_GET['ida'];

    mysqli_query($conexao,"DELETE FROM heroi_img where id = ".$_GET['id']);
    
    unlink("arquivos/". $arquivo);
    
    header("location:index.php");
?>