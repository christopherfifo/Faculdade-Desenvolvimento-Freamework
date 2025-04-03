<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form action="../model/inserirCliente.php" method="post">
        <h1>Cadastro de Cliente</h1>
        <input type="text" name="cliente" placeholder="Nome do cliente" required>
        <input type="text" name="cpf" placeholder="CPF do cliente" required>
        <input type="number" name="codvendedor" placeholder="Código do vendedor" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>