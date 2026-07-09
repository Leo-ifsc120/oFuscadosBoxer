<?php

class Veiculos
{
    public $cd_veiculo;
    public $descricao;
    public $embalagem;
    public $produto;
    public $fabricante;
    public $fornecedor;
    public $estoque;
    public $aplicacao;
    public $ano_aplicacao;
    public $usado;
    public $estoque_minimo;

    function receberDados($conexao)
    {
        if($_POST["id"] == "")
        {
            $this->cd_veiculo = $conexao->query("SELECT MAX(CdVeiculo) FROM TblVeiculos")->fetchColumn() + 1;
        }
        else
        {
            $this->cd_veiculo = $_POST["id"];
        }
        $this->descricao       = trim($_POST["descricao"]);
        $this->embalagem       = trim($_POST["embalagem"]);
        $this->produto         = trim($_POST["produto"]);
        $this->fabricante      = trim($_POST["fabricante"]);
        $this->fornecedor      = trim($_POST["fornecedor"]);
        $this->estoque         = trim($_POST["estoque"]);
        $this->aplicacao       = trim($_POST["aplicacao"]);
        $this->ano_aplicacao   = trim($_POST["anoaplicacao"]);
        $this->usado           = trim($_POST["usado"]);
        $this->estoque_minimo  = trim($_POST["estoqueminimo"]);
    }

    function inserirVeiculo($conn)
    {
        $sql = "INSERT INTO TblVeiculos (CdVeiculo, DsVeiculo, DsEmbalagem, DsProduto, DsFabricante, DsFornecedor, NrEstoque, DsAplicacao, NrAnoAplicacao, InUsado, NrEstoqueMinimo)
                   VALUES ('$this->cd_veiculo', '$this->descricao', '$this->embalagem', '$this->produto', '$this->fabricante', '$this->fornecedor', '$this->estoque', '$this->aplicacao', '$this->ano_aplicacao', '$this->usado', '$this->estoque_minimo')";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro feito </p>";
    }

    function alterarVeiculo($conn)
    {
        $sql = "UPDATE TblVeiculos SET DsVeiculo = '$this->descricao', DsEmbalagem = '$this->embalagem', DsProduto = '$this->produto', DsFabricante = '$this->fabricante', DsFornecedor = '$this->fornecedor', NrEstoque = '$this->estoque', DsAplicacao = '$this->aplicacao', NrAnoAplicacao = '$this->ano_aplicacao', InUsado = '$this->usado', NrEstoqueMinimo = '$this->estoque_minimo' WHERE CdVeiculo = '$this->cd_veiculo'";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro alterado </p>";
    }

}
