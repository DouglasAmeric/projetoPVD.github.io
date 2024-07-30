<?php
include("conexao.php");

    if(isset($_POST["btn-login"])){
        $usuario = $_POST['username'];
        $senha = $_POST['password'];
        $senha = md5($senha);

        $consulta = "SELECT * FROM usuario WHERE username=? AND senha =?";
        $stmt = $con->prepare($consulta);
        $stmt->bind_param("ss", $usuario, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1){ 
            header("location:homePG.php");
        }else{
            echo "<script> 
                alert('USUARIO OU SENHA INCORRETO')
            </script>";
        }
        
    }
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\loginPG.css">
    <title>login</title>
</head>
<body onload="function evitar_dados_reload()">
    <h1>sign in</h1>
    <form action="" method="POST" onsubmit="return validarDadosForm()">
        <label for="username">username</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"> <br>
        <button type="submit" id="btn-login" name="btn-login" onclick="logar()">login</button>
    </form>
    <script src="JS/funcoes.js"></script>
</body>
</html>