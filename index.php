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
        <h1>Relatório de herois</h1>
            <a class="menu-button" href="formulario.php">Cadastrar</a><hr>
    </div>

    <form action="index.php" method="post">
        <div class="container-table-index">
            <table id="table-index">
                    <tr>
                        <td>Buscar</td>
                        <td><input type="text" name="buscar"></td>
                        <td><input class="button" type="submit" value="BUSCAR"></td>
                        <td><input class="button" type="submit" name="btnMostrar" value="EXIBIR TODOS"></Td>
                    </tr>
            </table>
        </div>
    </form>

    <!-- INICIO FUNÇÃO PARA REMOVER ERRO DE BUSCA CASO O CAMPO ESTEJA VAZIO  -->
    <?php 
        if(empty($_POST['buscar'])) {
            echo "";
        } else {
    ?>

    <div class="container-table-index">
        <table id="table-index">
            <thead>
                <tr>
                    <th>Nome do heroi</th>
                    <th>Universo</th>
                    <th>Imagem</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                
                <!-- FUNÇÃO DE BUSCA NO BANCO DE DADOS ATRAVÉS DO CAMPO DE PESQUISA -->
                <?php 
                    $busca = $_POST['buscar'];
                    $query = mysqli_query($conexao,"SELECT * FROM heroi_img WHERE nome LIKE '%$busca%'");
                    while($exibe = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $exibe[1] ?></td>
                    <td><?php echo $exibe[3] ?></td>
                    <td><img class="imgHeroiTable" src="arquivos/<?php echo $exibe[3] ?>"></td>
                    <td><a class="button" href="atualiza.php?id=<?php echo $exibe[0] ?>">Editar</a></td>
                    <td><a class="button" href="excluir.php?id=<?php echo $exibe[0] ?>&ida=<?php echo $exibe[2] ?>">Excluir</a></td>
                </tr>
            </tbody>

        <!-- FECHAMENTO FUNÇÃO DE BUSCA APÓS EXIBIÇÃO DOS DADOS -->   
        <?php }  ?>

        </table>

        <!-- FECHAMENTO FUNÇÃO PARA REMOVER ERRO DE BUSCA -->
        <?php } ?>

    </div>

    <!--
    <div class="footer">
        <p class="author">
            Desenvolvido por @diogosilvabr - 2021
        </p>                  
    </div> -->

</body>
</html>