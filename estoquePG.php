<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\estoquePG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>estoque</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="homePG.php"><i class="fas fa-home"></i><samp>HOME</samp></a></li>
                <li><a href="estoquePG.php"><i class="fas fa-box"></i><samp>ESTOQUE</samp></a></li>
                <li><a href="itemPG.php"><i class="fas fa-shopping-bag"></i><samp>adicionar item</samp></a></li>
                <li><a href="pvdPG.php"><i class="fas fa-microchip"></i><samp>PVD</samp></a></li>
                <li><a href="adicionarusuarioPG.php"><i class="fas fa-user"></i><samp>adicionar usuario</samp></a></li>
            </ul>
        </nav>
    </header>
    <div class="tabelaEstoque">
        <h2>Lista de Estoque</h2>
        <table>
            <?php
                include("conexao.php");

                $consult = "SELECT * FROM item";
                $result = $con->query($consult);

                if($result->num_rows > 0){
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>nome</th>";
                        echo "<th>categoria</th>";
                        echo "<th>preço</th>";
                        echo "<th>quantidade</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                    while($colunas = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$colunas["idItem"]."</td>";
                        echo "<td>".$colunas["nomeItem"]."</td>";
                        echo "<td>".$colunas["categoriaItem"]."</td>";
                        echo "<td>".$colunas["precoItem"]."</td>";
                        echo "<td>".$colunas["quantidadeItem"]."</td>";
                    }
                    echo "</tbody>";        
                }
                else {
                    echo "<tr><td colspan='3'>0 resultados</td></tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>