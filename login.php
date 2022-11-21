<?php
// tag de início de sessão
session_start();
include('conexao.php'); // importa funções e variáveis de outro arquivo.


// coleta informações do usuário
$email = $_GET['email'];
$senha = $_GET['senha'];

// echo "$email <br>";
// echo "$senha";

$mensagem = "Os dados inseridos são inválidos";
// valida se o usuário ou senha foi informado
if(empty($email) || empty($senha)) {
    $_SESSION['semEmailSenha'] = !$email;
// redireciona a página para o index.php
    header("location: index.php");
    exit;
}

// -------- Consulta no banco de dados ----------
$query = "SELECT * FROM `usuario` WHERE email = '{$email}' AND senha = '{$senha}'";
$result = mysqli_query($conexao, $query);
$numRows = mysqli_num_rows($result);
// captura informações do usuário
$dadosdousuario = mysqli_fetch_assoc($result);


// Usuário existe no banco de dados
if($numRows == 1) {
    $_SESSION['usuario'] = $dadosdousuario['nome'];
    // redireciona o usuário logado para a página de login
    header('location: painel.php');
} else {
    header('location: index.php');
    $_SESSION['usuario_invalido'] = $email;
    exit;
}