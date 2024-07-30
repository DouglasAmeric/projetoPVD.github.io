
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\adicionarusuarioPG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Adicionar Usuario</title>
</head>
<body onload="evitar_dados_reload()">
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
    <div class="formulario">
        <h2>Adicionar Usuarios</h2>
        <form action="adicionarusuarioPG.php" method="POST">
            <label for="usuario">usuario</label>
            <input type="text" name="usuario" id="usuario"><br>
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha"><br>
            <label for="tipo">Tipo de Conta</label>
            <select name="tipo" id="tipo">
                <option value="administrador">administrador</option>
                <option value="usuario">usuario</option>
            </select>

            <button type="submit" name="cadastrar" id="cadastrar">Cadastrar</button>
        </form>
    </div>
    <div class="tabela">
        <h2>Todos os Usuarios</h2>
            <table>
                <tbody>
                    <?php
                    include("conexao.php");
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $usuario = $_POST['usuario'];
                        $senha = md5($_POST['senha']);
                        $premissao = $_POST['tipo'];
                    
                        $query = "INSERT INTO usuario(username,senha,permissao) VALUES(?,?,?)";
                        $stmt =  mysqli_prepare($con,$query);
                        mysqli_stmt_bind_param($stmt,"sss", $usuario,$senha,$premissao);
                        $resp = mysqli_stmt_execute($stmt);
                        
                        mysqli_stmt_close($stmt);
                    }
                        $consult = "SELECT * FROM usuario";
                        $resultadoCons = $con->query($consult);
                    
                    if($resultadoCons->num_rows>0){
                        echo "<table>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Username</th>";
                        echo "<th>Permissão</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($colun = $resultadoCons->fetch_assoc()){
                            //echo "ID:".$colun["id"]." - username:" . $colun["username"]."".$colun[""]."-permissão:".$colun["permissao"]."<br>";
                            echo "<tr>";
                            echo "<td>".$colun["id"]."</td>";
                            echo "<td>".$colun["username"]."</td>";
                            echo "<td>".$colun["permissao"]."</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    }   
                    if ($resultadoCons->num_rows > 0) {
                        while ($colun = $resultadoCons->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $colun["id"] . "</td>";
                            echo "<td>" . $colun["username"] . "</td>";
                            echo "<td>" . $colun["permissao"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>0 resultados</td></tr>";
                    } 
                    ?>
                </tbody>
            </table>
    </div>
    
    <script src="JS/funcoes.js"></script>
</body>
</html>
