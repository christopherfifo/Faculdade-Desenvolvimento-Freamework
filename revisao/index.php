<?php 
session_start();

$_SESSION['tentativas'] = 3;
$_SESSION['error'] = false;
header('Location: ./view/acesso.php');

?>