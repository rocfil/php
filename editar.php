<?php
    session_start();
    include('verificacao.php');
    include('conexao.php');


// verificando se o usuário foi informado
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM usuario WHERE id = '{$id}'";
        $result = mysqli_query($conexao, $query);
        $dadosUsuario = mysqli_fetch_assoc($result);
        $nome = $dadosUsuario['nome'];
        $email = $dadosUsuario['email'];
        $senha = $dadosUsuario['senha'];
        }

    if(isset($_POST['salvar'])) {
        // pega os valores alterados
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $id = $_POST['id'];
        // atualiza no banco de dados
        $query = "UPDATE usuario SET nome = '{$nome}', email = '{$email}', senha = '{$senha}' WHERE id = {$id}";
        $result = mysqli_query($conexao, $query);
        $_SESSION["usuario_alterado"] = true;
        header('location: painel.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Edição de dados 👨‍💻</title>
</head>
<!-- br é a tag usada para quebra de linha -->
<body>


    <div class="topo">
    LOJAS AMERICANAS
    </div>
    <section class="interface">

    <!-- <h1 class="tit"><img class="user-icon" src="img/user-286.png" alt="user"> ÁREA DO CLIENTE</h1> -->

    <h2>Editar usuário</h2>
    
    

    <form style="margin-bottom: 50px;" action="editar.php" method="POST">
    <div>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <p>Nome:</p>
    <input value="<?php echo $nome ?>" class="entrada" name="nome" type="text" placeholder="ex: João">
    <p>Email:</p>
    <input value="<?php echo $email ?>" class="entrada" name="email" type="email" placeholder="ex: joaodasilva@yahoo.com">
    <br>
    <p>Senha:</p>    
    <input value="<?php echo $senha ?>" class="entrada" name="senha" type="text" placeholder="insira senha">
      </div>
     <button class="login-button" type="submit" name="salvar">Salvar</button>
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

