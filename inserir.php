<?php
    include("conexao.php");

    $nomeHeroi = $_POST["nomeHeroi"];
    $universo = $_POST["universo"];
    $arquivo = $_FILES['arquivo'];

                for ($i = 0; $i < count($arquivo['name']); $i++) {
                    move_uploaded_file($arquivo['tmp_name'][$i], "arquivos/".$arquivo['name'][$i]); 

                        mysqli_query($conexao,"INSERT INTO heroi_img (nome,universo,imagem)
                        VALUES ('$nomeHeroi','$universo','".$arquivo['name'][$i]."')"); }

                                header("location:index.php");

?>