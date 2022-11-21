<?php
// verificar se o usuário está logado
if(!$_SESSION['usuario']) {
    header('location: index.php');
    exit;
}

?>