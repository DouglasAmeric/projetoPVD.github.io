<?php
include("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nomeItem = $_POST["nomeItem"];
        $categoriaItem = $_POST["categoria"];
        $precoItem = $_POST["precoItem"];
        $quantidadeItem = $_POST["quantidadeItem"];

        $query = "INSERT INTO item (nomeItem, categoriaItem, precoItem, quantidadeItem) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt,"ssdi",$nomeItem, $categoriaItem, $precoItem, $quantidadeItem);
        mysqli_stmt_execute($stmt);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\itemPG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
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
    <div class="formItem">
        <h2>Cadastrar novo Item</h2>
        <form action="" method="POST">
            <label for="nomeItem">Nome do item</label>
            <input type="text" name="nomeItem" id="nomeItem"><br>
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria">
                <option value="eletronico">Eletronico</option>
                <option value="comida">Comida</option>
                <option value="bebida">Bebida</option>
            </select> <br>
            <label for="precoItem">Preço</label>
            <input type="number" name="precoItem" id="preco"><br>
            <label for="quantidade">quantidade</label>
            <input type="number" name="quantidadeItem" id="quantidade"><br>
            <button type="submit" name="addItem" id="addItem">Adicionar Item</button> 
        </form>
    </div>
</body>
</html>