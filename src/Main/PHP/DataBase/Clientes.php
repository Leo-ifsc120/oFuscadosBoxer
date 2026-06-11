<?php

class Clientes
{
    public $cdCliente;
    public $razao;
    public $email;
    public $telefone;
    public $whatsApp;
    public $cnpj;
    public $inscricaoEstadual;
    public $endereco;
    public $nEndereco;
    public $bairro;
    public $cidade;
    public $uf;
    public $complemento;
    public $cep;
    public $Fantasia;
    public $dataCadastro;

 function receberDados($conexao)
 {
     $sql = "select max(CdCliente) from TblClientes";
     $stmt = $conexao->query($sql)->fetchall();
        foreach ($stmt as $row)
        {
            $this->cdCliente = $row[0] + 1;
        }
     $this->razao                = trim($_POST["razaoSocial"]);
     $this->email                = trim($_POST["email"]);
     $this->telefone             = trim($_POST["telefone"]);
     $this->whatsApp             = trim($_POST["whatsApp"]);
     $this->cnpj                 = trim($_POST["cnpjcpf"]);
     $this->endereco             = trim($_POST["endereco"]);
     $this->nEndereco            = trim($_POST["nendereco"]);
     $this->bairro               = trim($_POST["Bairro"]);
     $this->cidade               = trim($_POST["Cidade"]);
     $this->uf                   = trim($_POST["UF"]);
     $this->complemento          = trim($_POST["complemento"]);
     $this->cep                  = trim($_POST["CEP"]);
     $this->Fantasia             = trim($_POST["fantasia"]);
     $this->dataCadastro         = date("y/m/d");
 }

 function inserirCliente($conn)
 {

     $sql = "INSERT INTO TblClientes (CdCliente, DsRazao, DsFantasia, CdCnpjCpf, Dsemail, DsTelefone, DsWattsapp, Dsendereco, CdCep, DsBairro, dsCidade, Nrendereco, DsComplemento, DtCadasto)
                VALUES ('$this->cdCliente', '$this->razao', '$this->Fantasia', '$this->cnpj', '$this->email', '$this->telefone', '$this->whatsApp', '$this->endereco', '$this->cep', '$this->bairro', '$this->cidade', '$this->nEndereco', '$this->complemento', $this->dataCadastro)";
     $conn->query($sql) or $conn->errorInfo();

     echo "<p> Cadastro feito </p>";

 }

}