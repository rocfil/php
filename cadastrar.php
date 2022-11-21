<?php
session_start();
include('conexao.php');
// coleta informações de cadastro do usuário
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

// Consultar no bd para verificar se o usuário existe
$query = "SELECT * FROM `usuario` WHERE email = '{$email}'";
$result = mysqli_query($conexao, $query);
$numRows = mysqli_num_rows($result);

if ($numRows == 1) {
    $_SESSION['usuario_cadastrado'] = true;
    header('location: cadastro.php');
    exit;
} else {
    // Insere os dados do usuário caso o mesmo não existe.
   $query = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '{$nome}', '{$email}', '{$senha}')";
   if ($conexao -> query($query) === true) {
    // Se inseriu os dados corretamente, retorna a mensagem para o painel do usuário.
    $_SESSION['usuario_cadastrado'] = true;
    header("location: painel.php");
    exit;
   }
}
?>

pagina de cadastração