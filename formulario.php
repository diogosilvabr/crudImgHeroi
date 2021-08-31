<?php
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HEROIS IMG</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

    <div class="header">
        <h1>Cadastrar novo heroi</h1>
        <a class="menu-button" href="index.php">Voltar</a><hr>
    </div>

    <form action="inserir.php" method="post" enctype="multipart/form-data">
        <div class="container-table-form">
            <table id="table-form">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nomeHeroi" required></td>
                </tr>   
                <tr>
                    <td>Universo:</td>
                    <td>
                        <select name="universo" required>
                            <option></option>
                            <option name="universo" value="DC">DC</option>
                            <option name="universo" value="Marvel">Marvel</option>
                        </select>   
                    </td>
                </tr>
                <tr>
                    <td>Arquivo:</td>
                    <td><input type="file" name="arquivo[]"></td>
                </tr>    
                <tr>
                    <td></td>
                    <td><input class="button" type="submit"></td>
                </tr>
            </table>

            <input type="hidden" name="max_file_size" value="99999999">
        </form>  

</body>
</html>