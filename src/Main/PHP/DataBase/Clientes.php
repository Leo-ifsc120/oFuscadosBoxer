<?php

class Clientes
{
    public $cd_cliente;
    public $razao;
    public $fantasia;
    public $email;
    public $telefone;
    public $whatsapp;
    public $cnpj_cpf;
    public $endereco;
    public $nrendereco;
    public $bairro;
    public $cidade;
    public $regiao;
    public $complemento;
    public $cep;
    public $dataCadastro;

    function receberDados($conexao)
    {
        if($_POST["id"] == "")
        {
            $this->cd_cliente = $conexao->query("SELECT MAX(CdCliente) FROM TblClientes")->fetchColumn() + 1;
        }
        else
        {
            $this->cd_cliente = $_POST["id"];
        }
        $this->razao         = trim($_POST["razaoSocial"]);
        $this->fantasia      = trim($_POST["fantasia"]);
        $this->email         = trim($_POST["email"]);
        $this->telefone      = trim($_POST["telefone"]);
        $this->whatsapp      = trim($_POST["whatsapp"]);
        $this->cnpj_cpf      = trim($_POST["cnpjcpf"]);
        $this->endereco      = trim($_POST["endereco"]);
        $this->nrendereco    = trim($_POST["numero"]);
        $this->bairro        = trim($_POST["bairro"]);
        $this->cidade        = trim($_POST["cidade"]);
        $this->regiao        = trim($_POST["regiao"]);
        $this->complemento   = trim($_POST["complemento"]);
        $this->cep           = trim($_POST["cep"]);
        $this->dataCadastro  = date("Y-m-d h:i:s");
    }

    function inserirCliente($conn)
    {
        $sql = "INSERT INTO TblClientes (CdCliente, DsRazao, DsFantasia, Dsemail, DsTelefone, DsWhattsapp, CdCnpjCPF, DsEndereco, Nrendereco, DsBairro, DsCidade, DSRegiao, Dscomplemento, CdCep, DtCadastro)
                   VALUES ('$this->cd_cliente', '$this->razao', '$this->fantasia', '$this->email', '$this->telefone', '$this->whatsapp', '$this->cnpj_cpf', '$this->endereco', '$this->nrendereco', '$this->bairro', '$this->cidade', '$this->regiao', '$this->complemento', '$this->cep', '$this->dataCadastro')";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro feito </p>";
    }

    function alterarCliente($conn)
    {
        $sql = "UPDATE TblClientes SET DsRazao = '$this->razao', DsFantasia = '$this->fantasia', Dsemail = '$this->email', DsTelefone = '$this->telefone', DsWhattsapp = '$this->whatsapp', CdCnpjCPF = '$this->cnpj_cpf', DsEndereco = '$this->endereco', Nrendereco = '$this->nrendereco', DsBairro = '$this->bairro', DsCidade = '$this->cidade', DSRegiao = '$this->regiao', Dscomplemento = '$this->complemento', CdCep = '$this->cep' WHERE CdCliente = '$this->cd_cliente'";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro alterado </p>";
    }

}
