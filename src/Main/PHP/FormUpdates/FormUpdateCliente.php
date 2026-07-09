<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleForm.css">
</head>
<body>

<script src="../../JavaScript/Script.js"></script>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">
    <div class="cabecalho">
        <h1>Alterar Cliente</h1>

            <form action="FormUpdateCliente.php" method="post">

                <div class="form">

                    <label id="insertLabel">ID: </label>
                    <input id="insertinput" type="text" name="id" readonly>
                    <label id="insertLabel">Razão Social: </label>
                    <input id="insertinput" type="text" name="razaoSocial" required>
                    <label id="insertLabel">Fantasia:</label>
                    <input id="insertinput" type="text" name="fantasia" required>
                    <label id="insertLabel">CNPJ/CPF:</label>
                    <input id="insertinput" type="text" name="cnpjcpf" required>
                    <label id="insertLabel">E-Mail:</label>
                    <input id="insertinput" type="text" name="email" required>
                    <label id="insertLabel">Telefone:</label>
                    <input id="insertinput" type="text" name="telefone" required>
                    <label id="insertLabel">WhatsApp:</label>
                    <input id="insertinput" type="text" name="whatsapp" required>
                    <label id="insertLabel">Endereço:</label>
                    <input id="insertinput" type="text" name="endereco" required>
                    <label id="insertLabel">Número:</label>
                    <input id="insertinput" type="text" name="numero">
                    <label id="insertLabel">Complemento:</label>
                    <input id="insertinput" type="text" name="complemento">
                    <label id="insertLabel">Bairro:</label>
                    <input id="insertinput" type="text" name="bairro" required>
                    <label id="insertLabel">Cidade:</label>
                    <input id="insertinput" type="text" name="cidade" required>
                    <label id="insertLabel">Região/UF:</label>
                    <input id="insertinput" type="text" name="regiao" required>
                    <label id="insertLabel">CEP:</label>
                    <input id="insertinput" type="text" name="cep" required>
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="updateClientes" type="submit">Alterar cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callClientes()">Cancelar</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Clientes.php";

$banco = new Banco();
$conexao = $banco->connect();

$cliente = new Clientes();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM TblClientes WHERE CdCliente = '$id'";
    $result = $conexao->query($sql)->fetchAll();
    
    if (!empty($result)) {
        $row = $result[0];
    } else {
        echo "<p>Cliente não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>ID não fornecido!</p>";
    exit;
}

$btnUpdate = isset($_POST['updateClientes']);

if ($btnUpdate) {
    $cliente->receberDados($conexao);
    $cliente->alterarCliente($conexao);
    header("Location: ../Tables/TblClientes.php");
}

?>

<script>
    document.querySelector('input[name="id"]').value = '<?php echo $row[0]; ?>';
    document.querySelector('input[name="razaoSocial"]').value = '<?php echo $row[1]; ?>';
    document.querySelector('input[name="fantasia"]').value = '<?php echo $row[2]; ?>';
    document.querySelector('input[name="email"]').value = '<?php echo $row[3]; ?>';
    document.querySelector('input[name="telefone"]').value = '<?php echo $row[4]; ?>';
    document.querySelector('input[name="whatsapp"]').value = '<?php echo $row[5]; ?>';
    document.querySelector('input[name="cnpjcpf"]').value = '<?php echo $row[6]; ?>';
    document.querySelector('input[name="endereco"]').value = '<?php echo $row[7]; ?>';
    document.querySelector('input[name="numero"]').value = '<?php echo $row[8]; ?>';
    document.querySelector('input[name="bairro"]').value = '<?php echo $row[9]; ?>';
    document.querySelector('input[name="cidade"]').value = '<?php echo $row[10]; ?>';
    document.querySelector('input[name="regiao"]').value = '<?php echo $row[11]; ?>';
    document.querySelector('input[name="complemento"]').value = '<?php echo $row[12]; ?>';
    document.querySelector('input[name="cep"]').value = '<?php echo $row[13]; ?>';
</script>

</body>
</html>
