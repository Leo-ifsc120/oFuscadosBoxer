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
        <h1>Alterar Fornecedor</h1>

            <form action="FormUpdateFornecedor.php" method="post">

                <div class="form">

                    <label id="insertLabel">ID: </label>
                    <input id="insertinput" type="text" name="cdfornecedor" readonly>
                    <label id="insertLabel">Razão Social: </label>
                    <input id="insertinput" type="text" name="razaoSocial" required>
                    <label id="insertLabel">Fantasia:</label>
                    <input id="insertinput" type="text" name="fantasia" required>
                    <label id="insertLabel">Cnpj/cpf:</label>
                    <input id="insertinput" type="text" name="cnpjcpf" required>
                    <label id="insertLabel">Inscrição Estadual:</label>
                    <input id="insertinput" type="text" name="inscricao" required>
                    <label id="insertLabel">E-Mail:</label>
                    <input id="insertinput" type="text" name="email" required>
                    <label id="insertLabel">Telefone:</label>
                    <input id="insertinput" type="text" name="telefone" required>
                    <label id="insertLabel">WhatsApp:</label>
                    <input id="insertinput" type="text" name="whatsApp" required>
                    <label id="insertLabel">Contato:</label>
                    <input id="insertinput" type="text" name="contato">
                    <label id="insertLabel">Endereço:</label>
                    <input id="insertinput" type="text" name="endereco" required>
                    <label id="insertLabel">Número:</label>
                    <input id="insertinput" type="text" name="numero">
                    <label id="insertLabel">Complemento:</label>
                    <input id="insertinput" type="text" name="complemento">
                    <label id="insertLabel">CEP:</label>
                    <input id="insertinput" type="text" name="CEP" required>
                    <label id="insertLabel">Bairro:</label>
                    <input id="insertinput" type="text" name="Bairro" required>
                    <label id="insertLabel">Cidade:</label>
                    <input id="insertinput" type="text" name="Cidade" required>
                    <label id="insertLabel">UF/Região:</label>
                    <input id="insertinput" type="text" name="UF" required>
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="updateFornecedor" type="submit">Alterar cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callFornecedores()">Cancelar</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Fornecedores.php";

$banco = new Banco();
$conexao = $banco->connect();

$fornecedor = new Fornecedores();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM TblFornecedores WHERE Cdfornecedor = '$id'";
    $result = $conexao->query($sql)->fetchAll();
    
    if (!empty($result)) {
        $row = $result[0];
    } else {
        echo "<p>Fornecedor não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>ID não fornecido!</p>";
    exit;
}

$btnUpdate = isset($_POST['updateFornecedor']);

if ($btnUpdate) {
    $fornecedor->receberDados($conexao);
    $fornecedor->alterarFornecedor($conexao);
    header("Location: ../Tables/TblFornecedores.php");
}

?>

<script>
    document.querySelector('input[name="cdfornecedor"]').value = '<?php echo $row[0]; ?>';
    document.querySelector('input[name="razaoSocial"]').value = '<?php echo $row[1]; ?>';
    document.querySelector('input[name="fantasia"]').value = '<?php echo $row[2]; ?>';
    document.querySelector('input[name="telefone"]').value = '<?php echo $row[3]; ?>';
    document.querySelector('input[name="endereco"]').value = '<?php echo $row[4]; ?>';
    document.querySelector('input[name="CEP"]').value = '<?php echo $row[5]; ?>';
    document.querySelector('input[name="Bairro"]').value = '<?php echo $row[7]; ?>';
    document.querySelector('input[name="Cidade"]').value = '<?php echo $row[8]; ?>';
    document.querySelector('input[name="UF"]').value = '<?php echo $row[9]; ?>';
    document.querySelector('input[name="cnpjcpf"]').value = '<?php echo $row[10]; ?>';
    document.querySelector('input[name="inscricao"]').value = '<?php echo $row[11]; ?>';
    document.querySelector('input[name="whatsApp"]').value = '<?php echo $row[12]; ?>';
    document.querySelector('input[name="contato"]').value = '<?php echo $row[13]; ?>';
    document.querySelector('input[name="email"]').value = '<?php echo $row[6]; ?>';
</script>

</body>
</html>