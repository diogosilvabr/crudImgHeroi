<?php
    include("conexao.php");

    $nomeHeroi = $_POST['nomeHeroi'];
    $nomeImagem = $_POST['nomeImagem'];
    $universo = $_POST['universo'];
    $varId = $_POST['campoId'];

    mysqli_query($conexao,"UPDATE heroi_img SET 
    nome = '$nomeHeroi', universo = '$universo', imagem = '$nomeImagem' WHERE id = '$varId'");

    header("location:index.php");
?>