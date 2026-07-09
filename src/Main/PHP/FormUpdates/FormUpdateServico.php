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
        <h1>Alterar Serviço</h1>

            <form action="FormUpdateServico.php" method="post">

                <div class="form">

                    <label id="insertLabel">ID: </label>
                    <input id="insertinput" type="text" name="id" readonly>
                    <label id="insertLabel">Código Cliente: </label>
                    <input id="insertinput" type="text" name="cdcliente" required>
                    <label id="insertLabel">Razão Social:</label>
                    <input id="insertinput" type="text" name="razao" required>
                    <label id="insertLabel">Código Veículo:</label>
                    <input id="insertinput" type="text" name="cdveiculo" required>
                    <label id="insertLabel">KM Atual:</label>
                    <input id="insertinput" type="number" name="kmatual" required>
                    <label id="insertLabel">Status:</label>
                    <input id="insertinput" type="text" name="status" required>
                    <label id="insertLabel">Situação:</label>
                    <input id="insertinput" type="text" name="situacao" required>
                    <label id="insertLabel">Óleo Trocado:</label>
                    <input id="insertinput" type="text" name="trocaoleao">
                    <label id="insertLabel">Data Ordem Serviço:</label>
                    <input id="insertinput" type="datetime-local" name="dtordemservico" required>
                    <label id="insertLabel">Data Entrada:</label>
                    <input id="insertinput" type="datetime-local" name="dtentrada" required>
                    <label id="insertLabel">Entrega Prevista:</label>
                    <input id="insertinput" type="datetime-local" name="dtprevisto">
                    <label id="insertLabel">Data Saída:</label>
                    <input id="insertinput" type="datetime-local" name="dtsaida">
                    <label id="insertLabel">Valor Antecipado:</label>
                    <input id="insertinput" type="number" step="0.01" name="valorantecipado">
                    <label id="insertLabel">Valor Falta Pagar:</label>
                    <input id="insertinput" type="number" step="0.01" name="valorfaltapagar">
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="updateServicos" type="submit">Alterar cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callServicos()">Cancelar</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Servicos.php";

$banco = new Banco();
$conexao = $banco->connect();

$servico = new Servicos();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM TblServicos WHERE CdServico = '$id'";
    $result = $conexao->query($sql)->fetchAll();
    
    if (!empty($result)) {
        $row = $result[0];
    } else {
        echo "<p>Serviço não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>ID não fornecido!</p>";
    exit;
}

$btnUpdate = isset($_POST['updateServicos']);

if ($btnUpdate) {
    $servico->receberDados($conexao);
    $servico->alterarServico($conexao);
    header("Location: ../Tables/TblServicos.php");
}

?>

<script>
    document.querySelector('input[name="id"]').value = '<?php echo $row[0]; ?>';
    document.querySelector('input[name="cdcliente"]').value = '<?php echo $row[1]; ?>';
    document.querySelector('input[name="razao"]').value = '<?php echo $row[2]; ?>';
    document.querySelector('input[name="cdveiculo"]').value = '<?php echo $row[3]; ?>';
    document.querySelector('input[name="kmatual"]').value = '<?php echo $row[4]; ?>';
    document.querySelector('input[name="status"]').value = '<?php echo $row[5]; ?>';
    document.querySelector('input[name="situacao"]').value = '<?php echo $row[6]; ?>';
    document.querySelector('input[name="trocaoleao"]').value = '<?php echo $row[7]; ?>';
    document.querySelector('input[name="dtordemservico"]').value = '<?php echo $row[8]; ?>';
    document.querySelector('input[name="dtentrada"]').value = '<?php echo $row[9]; ?>';
    document.querySelector('input[name="dtprevisto"]').value = '<?php echo $row[10]; ?>';
    document.querySelector('input[name="dtsaida"]').value = '<?php echo $row[11]; ?>';
    document.querySelector('input[name="valorantecipado"]').value = '<?php echo $row[12]; ?>';
    document.querySelector('input[name="valorfaltapagar"]').value = '<?php echo $row[13]; ?>';
</script>

</body>
</html>
