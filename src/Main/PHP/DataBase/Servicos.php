<?php

class Servicos
{
    public $cd_servico;
    public $cd_cliente;
    public $razao;
    public $cd_veiculo;
    public $km_atual;
    public $status;
    public $situacao;
    public $trocao_leo;
    public $dt_ordem_servico;
    public $dt_entrada;
    public $dt_previsto;
    public $dt_saida;
    public $valor_antecipado;
    public $valor_falta_pagar;

    function receberDados($conexao)
    {
        if($_POST["id"] == "")
        {
            $this->cd_servico = $conexao->query("SELECT MAX(CdServico) FROM TblServicos")->fetchColumn() + 1;
        }
        else
        {
            $this->cd_servico = $_POST["id"];
        }
        $this->cd_cliente           = trim($_POST["cdcliente"]);
        $this->razao                = trim($_POST["razao"]);
        $this->cd_veiculo           = trim($_POST["cdveiculo"]);
        $this->km_atual             = trim($_POST["kmatual"]);
        $this->status               = trim($_POST["status"]);
        $this->situacao             = trim($_POST["situacao"]);
        $this->trocao_leo           = trim($_POST["trocaoleao"]);
        $this->dt_ordem_servico     = trim($_POST["dtordemservico"]);
        $this->dt_entrada           = trim($_POST["dtentrada"]);
        $this->dt_previsto          = trim($_POST["dtprevisto"]);
        $this->dt_saida             = trim($_POST["dtsaida"]);
        $this->valor_antecipado     = trim($_POST["valorantecipado"]);
        $this->valor_falta_pagar    = trim($_POST["valorfaltapagar"]);
    }

    function inserirServico($conn)
    {
        $sql = "INSERT INTO TblServicos (CdServico, cdcliente, DsRazao, cdveiculo, NrKmAtual, InStatus, InSituacao, InTrocaoleo, DtOrdemServico, DtEntrada, DtPrevisto, DtSaida, VlordemServicoPgAntecipado, VlordemServicofaltaPagar)
                   VALUES ('$this->cd_servico', '$this->cd_cliente', '$this->razao', '$this->cd_veiculo', '$this->km_atual', '$this->status', '$this->situacao', '$this->trocao_leo', '$this->dt_ordem_servico', '$this->dt_entrada', '$this->dt_previsto', '$this->dt_saida', '$this->valor_antecipado', '$this->valor_falta_pagar')";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro feito </p>";
    }

    function alterarServico($conn)
    {
        $sql = "UPDATE TblServicos SET cdcliente = '$this->cd_cliente', DsRazao = '$this->razao', cdveiculo = '$this->cd_veiculo', NrKmAtual = '$this->km_atual', InStatus = '$this->status', InSituacao = '$this->situacao', InTrocaoleo = '$this->trocao_leo', DtOrdemServico = '$this->dt_ordem_servico', DtEntrada = '$this->dt_entrada', DtPrevisto = '$this->dt_previsto', DtSaida = '$this->dt_saida', VlordemServicoPgAntecipado = '$this->valor_antecipado', VlordemServicofaltaPagar = '$this->valor_falta_pagar' WHERE CdServico = '$this->cd_servico'";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro alterado </p>";
    }

}
