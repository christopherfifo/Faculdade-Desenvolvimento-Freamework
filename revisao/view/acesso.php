<?php

session_start();

include_once '../control/dados.php';

$verificar = new Dados();

$name = strtolower($verificar->getNome());
$password = strtolower($verificar->getPassword());

$adm = strtolower($verificar->getAdm());
$passwordAdm = strtolower($verificar->getPasswordAdm());

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 3;
}

$chances = $_SESSION['tentativas'];
$pode = false;

$erro = $_SESSION['error'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = strtolower($_POST['cxnome']);
    $senha = strtolower($_POST['cxpassword']);
    
    if ($nome == $name && $senha == $password) {
        $_SESSION['nome'] = $nome;
        $_SESSION['password'] = $senha; 
        $pode = true;
        header('Location: ../model/exibirCliente.php');
        exit;
    } elseif ($nome == $adm && $senha == $passwordAdm) {
        $_SESSION['nome'] = $adm;
        $_SESSION['password'] = $passwordAdm;
        $pode = true;
        header('Location: ../model/exibirADM.php');
        exit;
    } else {
        $chances--;
        $erro = true;
        $_SESSION['error'] = $erro;
        $_SESSION['tentativas'] = $chances;
        if ($chances == 0) {
            echo "Numero de tentativas ultrapassado!";
            session_destroy();
            header('Location: ../index.php');
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../control/css/style.css">
    <title>login</title>
</head>
<body>

<div class="login">
    
<?php if (!$pode && $chances > 0): ?>

    <form action="acesso.php" method="POST" class="form">

    <?php if($erro): ?>
        <p>usuario invalido</p>

        <?php endif; ?>

        <h1>Login</h1>
        <br>
        <input type="text" name="cxnome">
        <br>
        <input type="password" name="cxpassword">
        <br>
        <button> Gravar</button>
        <p>Número de tentativas restantes: <?php echo $chances; ?></p>
    </form>

<?php endif; ?>
    </div>
</body>
</html>