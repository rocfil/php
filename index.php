<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="https://fonts.cdnfonts.com/css/retrolight" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Página inicial 👨‍💻</title>
</head>
<!-- br é a tag usada para quebra de linha -->
<body>


    <div class="topo">
    <h1>MERCADO SEM NOME</h1>
    </div>
    <section class="interface">
    
    <!-- <h1 class="tit"><img class="user-icon" src="img/user-286.png" alt="user"> ÁREA DO CLIENTE</h1> -->

    <h2>Acesse sua conta para realizar pedidos e ver histórico de compras.</h2>
    
    

    <form action="login.php" method="GET">
    <div>
    
    <p>Usuário:</p>
    <input class="entrada" name="email" type="email" placeholder="ex: joaodasilva@yahoo.com">
    <br>
    <p>Senha:</p>
        
    <input class="entrada" name="senha" type="password" placeholder="insira senha">
      </div>
     <button class="login-button" type="submit">Fazer Login</button>
     </form>
     <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
     <?php 
    if(isset($_SESSION['semEmailSenha'])) {
        echo "<h3>Usuário ou senha não informados</h3>";
    }
    unset($_SESSION['semEmailSenha']);

    if(isset($_SESSION['usuario_invalido'])) {
        echo "<h3>Usuário ou senha estão inválidos. Tente novamente.</h3>";
    }
    unset($_SESSION['usuario_invalido']);
    ?>
    </section>
    

</body>
</html>

