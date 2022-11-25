<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Página inicial 👨‍💻</title>
</head>
<!-- br é a tag usada para quebra de linha -->
<body>


    <div class="topo">
    LOJAS AMERICANAS
    </div>
    <section class="interface">

    <!-- <h1 class="tit"><img class="user-icon" src="img/user-286.png" alt="user"> ÁREA DO CLIENTE</h1> -->

    <h2>Faça seu cadastro para realizar compras.</h2>
    
    

    <form action="cadastrar.php" method="GET">
    <div>
        <p>Seu nome:</p>
        <input class="entrada" name="nome" type="text" placeholder="ex: João">
        <p>Usuário:</p>
        <input class="entrada" name="email" type="email" placeholder="ex: joaodasilva@yahoo.com">
        <br>
        <p>Crie uma senha:</p>
            
        <input class="entrada" name="senha" type="password" placeholder="insira senha">
        
    </div>
     <button class="login-button" type="submit">Cadastrar</button>
     </form>

     <?php

    if(isset($_SESSION['usuario_cadastrado'])) {
        echo "<h3>Este email já está cadastrado</h3>";
    }
    unset($_SESSION['usuario_cadastrado']);
    ?>

    </section>
    

</body>
</html>

