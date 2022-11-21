<?php
session_start();
include('conexao.php');
include('verificacao.php');
$usuario = $_SESSION['usuario'];


$id = $_GET['id'];

// echo $id;
// pesquisar no bd se o usuário existe


if(isset($id)) {
    $id = $_GET['id'];

    // pesquisa no bd se o usuário existe
    $query = "SELECT id FROM usuario WHERE id = '{$id}'";
    $result = mysqli_query($conexao, $query);
    $numRows = mysqli_num_rows($result);

    // pesquisa no bd se é o mesmo usuário que está logado
    $queryLogado = "SELECT id FROM usuario WHERE nome = '{$usuario}'";
    $resultLogado = mysqli_query($conexao, $queryLogado);
    $usuarioLogado = mysqli_fetch_assoc($resultLogado);
    $idUsuarioLogado = $usuarioLogado['id'];
    
    if($numRows == 1) {
        if ($id == $idUsuarioLogado) {
            $_SESSION["usuario_logado"] = true;
            header('location: painel.php');
            exit;
        } else {
            // se o usuário está no banco mas não está logado, será excluído
        $query = "DELETE FROM usuario WHERE id = {$id}";
        $result = mysqli_query($conexao, $query);
        // grava sessão para retornar a mensagem
        $_SESSION["usuario_excluido"] = true;
        header('location: painel.php');
        exit;
        }

} 
} else {
    header('location: painel.php');
    exit;
}