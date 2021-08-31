<?php
    include("conexao.php");
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HEROI IMG</title>
            <link rel="stylesheet" href="style.css">
        </head>
<body>

    <div class="header">
        <h1>Alterar dados do heroi</h1>
            <a class="menu-button" href="index.php">Voltar</a><hr>
    </div>
    
        <?php
            $query = mysqli_query($conexao,"SELECT * FROM heroi_img WHERE id = ".$_GET['id']);
            while($exibe = mysqli_fetch_array($query)) {
        ?>

        <form action="atualizar.php" method="post">
            <div class="container-table-form">
                <table id="table-form">
                    <tr>
                        <input type="hidden" name="campoId" value="<?php echo $exibe[0] ?>">
                        <td>Nome:</td>
                        <td><input type="text" value="<?php echo $exibe[1] ?>" name="nomeHeroi"></td>
                    </tr>
                        <td>Universo:</td>
                        <td>
                            <select name="universo">
                                <option selected></option>
                                <option>DC</option>
                                <option>Marvel</option>
                            </select>     
                        </td>
                    </tr>
                    <tr>
                        <td>Imagem:</td>
                        <td><input type="text" name="nomeImagem" cols="35" rows="5" value="<?php echo $exibe[3] ?>"></td>
                    </tr>    
                    <tr>
                        <td></td>
                        <td><input class="button" type="submit" value="Atualizar"></td>
                    </tr>
                </table>
            </div>
        </form>  

        <?php } ?>

</body>
</html>