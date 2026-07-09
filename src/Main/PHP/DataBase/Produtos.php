<?php

class Produtos
{
    public $cd_produto;
    public $cod_barras;
    public $observacao;
    public $embalagem;
    public $estoque;
    public $fabricante;
    public $cd_fabricante;
    public $aplicacao;
    public $ano_aplicacao;
    public $estado;
    public $estoque_minimo;

    function receberDados($conexao)
    {
        if($_POST["id"] == "")
        {
            $this->cd_produto = $conexao->query("SELECT MAX(CdProduto) FROM TblProdutos")->fetchColumn() + 1;
        }
        else
        {
            $this->cd_produto = $_POST["id"];
        }
        $this->cod_barras      = trim($_POST["codbarras"]);
        $this->observacao      = trim($_POST["observacao"]);
        $this->embalagem       = trim($_POST["embalagem"]);
        $this->estoque         = trim($_POST["estoque"]);
        $this->fabricante      = trim($_POST["fabricante"]);
        $this->cd_fabricante   = trim($_POST["cdfabricante"]);
        $this->aplicacao       = trim($_POST["aplicacao"]);
        $this->ano_aplicacao   = trim($_POST["anoaplicacao"]);
        $this->estado          = trim($_POST["estado"]);
        $this->estoque_minimo  = trim($_POST["estoqueminimo"]);
    }

    function inserirProduto($conn)
    {
        $sql = "INSERT INTO TblProdutos (CdProduto, CodBarras, DsObservacao, DsEmbalagem, NrEstoque, DsFabricante, CdFabricante, DsAplicacao, NrAnoAplicacao, InEstado, NrEstoqueMinimo)
                   VALUES ('$this->cd_produto', '$this->cod_barras', '$this->observacao', '$this->embalagem', '$this->estoque', '$this->fabricante', '$this->cd_fabricante', '$this->aplicacao', '$this->ano_aplicacao', '$this->estado', '$this->estoque_minimo')";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro feito </p>";
    }

    function alterarProduto($conn)
    {
        $sql = "UPDATE TblProdutos SET CodBarras = '$this->cod_barras', DsObservacao = '$this->observacao', DsEmbalagem = '$this->embalagem', NrEstoque = '$this->estoque', DsFabricante = '$this->fabricante', CdFabricante = '$this->cd_fabricante', DsAplicacao = '$this->aplicacao', NrAnoAplicacao = '$this->ano_aplicacao', InEstado = '$this->estado', NrEstoqueMinimo = '$this->estoque_minimo' WHERE CdProduto = '$this->cd_produto'";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro alterado </p>";
    }

}
