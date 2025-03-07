<?php

session_start();

$nome = $_SESSION['nome'];
$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../control/css/style.css">
    <title>cliente</title>
</head>
<body >

<div class="cliente">
<h1 class="title CLIENTE"><?php echo "Você é o: " . $nome . "👌😁"?></h1>

    </div>

</body>
</html>

