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

<form action="telaValidacao.php" method="post">
    <div class="container">
        <label for="usuario">Nome: </label>
        <input type="text" id="nome" name="usuario" required autofocus><br>

        <label for="password">Senha: </label>
        <input type="password" id="senha" name="password" required><br>

        <input type="submit" value="Cadastrar" id="button">
    </div>
</form>
</body>
</html>