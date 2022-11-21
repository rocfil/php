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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuário</title>
</head>
<body>
    
    
    <div class="topo">
        <h2>Painel do usuário<img class="cart" src="./img/shoppingcart.png" alt="cart"></h2>
    </div>
    <section class="interface">
        <h2>Bem vindo(a), <?php echo $usuario ?></h2>
        <h2>Novos itens à venda:</h2>
        <div>
            <p>Banco de dados com frete grátis <button class="btn btn-outline-danger">Comprar</button></p>
            <img class="bancodedados" src="./img/bancodedados.jpg" alt="bancodedados">
        </div>
        <div>
            <p>Papel higiênico de alta qualidade <button class="btn btn-outline-danger">Comprar</button></p>
            <img class="bancodedados" src="./img/papel-google.jpg" alt="bancodedados">
        </div>
    </section>
        <button href="logout.php" class="btn btn-danger" style="margin-bottom: 100px;">
            Sair
        </button>
    <?php
    //Consulta PHP para retornar informações do Usuário
    $query = "SELECT * FROM usuario";
    $result = mysqli_query($conexao, $query);
    ?>
    <button class="btn btn-light"><a href="cadastro.php">Cadastrar novo usuário</a></button>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
        </tr>
        <?php
        //enquanto existir dados na minha variavel $result
        //Executa o Laço de repetição
        while ($linha = mysqli_fetch_assoc($result)) {
            $id = $linha['id'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $senha = $linha['senha'];
        ?>
        <!--Codigo HTML / Denhar as linhas da tabela  -->
        <tr style="align-items: center;">
            <td><?php echo $id ?></td>
            <td><?php echo $nome ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $senha ?></td>
            <td><a href="editar.php?id=<?php echo $id ?>"><button class="btn btn-primary">Editar</button></a>
            <td><a href="excluir.php?id=<?php echo $id?>"><button class="btn btn-primary">Excluir</button></a></td></td>
        </tr>
        <?php
        }
        ?>
        <?php 
    if(isset($_SESSION['usuario_excluido'])) {
        echo "<script>alert('Usuário excluido com sucesso')</script>";
    }
    unset($_SESSION['usuario_excluido']);
        ?>
    
    <?php
    if (isset($_SESSION['usuario_logado'])) {
        echo "<script>alert('Usuário logado não pode ser excluído!')</script>";
    }
    unset($_SESSION['usuario_logado']);
        ?>
    
    <?php
    if (isset($_SESSION['usuario_alterado'])) {
        echo "<script>alert('Os dados foram alterados')</script>";
    }
    unset($_SESSION['usuario_logado']);
        ?>
</body>

</html>

