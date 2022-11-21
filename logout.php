<?php
// inicia e verifica a sessão que está iniciada
session_start();
// remove a sessão
session_destroy();
header('location: index.php');
exit;
?>