<?php

// Caminho do banco de dados: HOST, usuário BD, senha BD, nome BD
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'sistemadelogin');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die("conexão com o banco de dados falhou");
// print_r($conexao);