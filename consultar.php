<?php
    include("conexao.php");
        if(isset($_POST['btnMostrar'])){
            $query = mysqli_query($conexao,"SELECT * FROM heroi_img");
            while($exibe = mysqli_fetch_array($query));
                } else if(isset($_POST['buscar'])) {
                    $busca = $_POST['buscar'];
                    $query = mysqli_query($conexao,"SELECT * FROM heroi_img WHERE nome LIKE '%$busca%'");
                    while($exibe = mysqli_fetch_array($query));
                }
?>