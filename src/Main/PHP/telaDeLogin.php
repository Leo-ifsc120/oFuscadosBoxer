<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<header>
    <img alt="" src="../img/oFuscadosLogo.jpg">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<form action="cadastro.php" method="post">
    <div class="container">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required autofocus><br>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Cadastrar" id="button">
    </div>
</form>
</body>
</html>