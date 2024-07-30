<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\homePG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home PG</title>
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
    <div class="quntidadeItens">
            <div class="icone">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="informacao">
                <h2>Total de Itens</h2>
                <span>#</span>
            </div>
    </div>

    <div class="totalVendas">
            <div class="icone">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="informacao">
                <h2>Total de Vendas</h2>
                <span>#</span>
            </div>
    </div>
    
    <div class="totalUsuarios">
            <div class="icone">
                <i class="fas fa-user"></i>
            </div>
            <div class="informacao">
                <h2>Total de Usuarios</h2>
                <span>#</span>
            </div>
    </div>
</body>
</html>