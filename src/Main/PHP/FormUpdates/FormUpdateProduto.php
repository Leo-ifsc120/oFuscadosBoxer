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
        <h1>Alterar Produto</h1>

            <form action="FormUpdateProduto.php" method="post">

                <div class="form">

                    <label id="insertLabel">ID: </label>
                    <input id="insertinput" type="text" name="id" readonly>
                    <label id="insertLabel">Código de Barras: </label>
                    <input id="insertinput" type="text" name="codbarras" required>
                    <label id="insertLabel">Observação/Descrição:</label>
                    <input id="insertinput" type="text" name="observacao" required>
                    <label id="insertLabel">Embalagem:</label>
                    <input id="insertinput" type="text" name="embalagem" required>
                    <label id="insertLabel">Estoque:</label>
                    <input id="insertinput" type="number" name="estoque" required>
                    <label id="insertLabel">Fabricante:</label>
                    <input id="insertinput" type="text" name="fabricante" required>
                    <label id="insertLabel">Código Fabricante:</label>
                    <input id="insertinput" type="text" name="cdfabricante">
                    <label id="insertLabel">Aplicação:</label>
                    <input id="insertinput" type="text" name="aplicacao">
                    <label id="insertLabel">Ano Aplicação:</label>
                    <input id="insertinput" type="number" name="anoaplicacao">
                    <label id="insertLabel">Estado:</label>
                    <input id="insertinput" type="text" name="estado">
                    <label id="insertLabel">Estoque Mínimo:</label>
                    <input id="insertinput" type="number" name="estoqueminimo">
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="updateProdutos" type="submit">Alterar cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callProdutos()">Cancelar</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Produtos.php";

$banco = new Banco();
$conexao = $banco->connect();

$produto = new Produtos();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM TblProdutos WHERE CdProduto = '$id'";
    $result = $conexao->query($sql)->fetchAll();
    
    if (!empty($result)) {
        $row = $result[0];
    } else {
        echo "<p>Produto não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>ID não fornecido!</p>";
    exit;
}

$btnUpdate = isset($_POST['updateProdutos']);

if ($btnUpdate) {
    $produto->receberDados($conexao);
    $produto->alterarProduto($conexao);
    header("Location: ../Tables/TblProdutos.php");
}

?>

<script>
    document.querySelector('input[name="id"]').value = '<?php echo $row[0]; ?>';
    document.querySelector('input[name="codbarras"]').value = '<?php echo $row[1]; ?>';
    document.querySelector('input[name="observacao"]').value = '<?php echo $row[2]; ?>';
    document.querySelector('input[name="embalagem"]').value = '<?php echo $row[3]; ?>';
    document.querySelector('input[name="estoque"]').value = '<?php echo $row[4]; ?>';
    document.querySelector('input[name="fabricante"]').value = '<?php echo $row[5]; ?>';
    document.querySelector('input[name="cdfabricante"]').value = '<?php echo $row[6]; ?>';
    document.querySelector('input[name="aplicacao"]').value = '<?php echo $row[7]; ?>';
    document.querySelector('input[name="anoaplicacao"]').value = '<?php echo $row[8]; ?>';
    document.querySelector('input[name="estado"]').value = '<?php echo $row[9]; ?>';
    document.querySelector('input[name="estoqueminimo"]').value = '<?php echo $row[10]; ?>';
</script>

</body>
</html>
