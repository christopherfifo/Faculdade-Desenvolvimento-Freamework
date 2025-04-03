<?php



    include_once "../control/dados.php";

    $gravar = new Dados;
    $gravar->setNome($_POST['cxnome']);
    echo "Nome: " . $gravar->getNome() . "<br>";
    $gravar->setEmail($_POST['cxemail']);
    echo "Email: " . $gravar->getEmail();
?>