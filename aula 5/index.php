<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once "control/filho.php";
    ?>
</head>
<body>

    <?php
    $filho = new Filho();
    $filho->exibir();
    ?>
    
</body>
</html>