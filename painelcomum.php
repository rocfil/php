<?php
session_start();
$usuario = $_SESSION['usuario'];
include('verificacao.php');
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.cdnfonts.com/css/retrolight" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuário</title>
</head>
<body>
    
    
    <div class="topo">
        <h1>Painel do usuário<img class="cart" src="./img/shoppingcart.png" alt="cart"></h1>
    </div>
    <section class="interface">
        <h2>Bem vindo(a), <?php echo $usuario ?></h2>
     
        <h2>Novos itens à venda:</h2>
        <div>
            <p>Banco de dados com frete grátis <button class="btn btn-outline-danger">Comprar</button></p>
            <img class="bancodedados" src="./img/bancodedados.jpg" alt="bancodedados">
        </div>
        <div>
            <p>Produto para higiene de alta qualidade <button class="btn btn-outline-danger">Comprar</button></p>
            <img class="bancodedados" src="./img/papel-google.jpg" alt="bancodedados">
        </div>
        <a href="logout.php">
            <button  class="btn btn-danger"> 
                Sair
            </button>
        </a>
        <a href="cadastro.php"><button class="btn btn-light">Cadastrar novo usuário</button></a>
    </section>

</body>

</html>

