<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bem vindo ao GrowTwitter!</h1><br>
    <h2>CADASTRAR USUARIO</h2>
    <form action="./final/action-users.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha" required>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>