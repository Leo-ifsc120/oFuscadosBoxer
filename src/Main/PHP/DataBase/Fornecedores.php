<?php

class Fornecedores
{
    public $cd_fornecedor;
    public $razao;
    public $Fantasia;
    public $cnpj;
    public $inscricaoEstadual;
    public $email;
    public $telefone;
    public $whatsApp;
    public $endereco;
    public $cep;
    public $bairro;
    public $cidade;
    public $uf;
    public $dataCadastro;

 function receberDados($conexao)
 {
     $sql = "select max(Cdfornecedor) from TblFornecedores";
     $stmt = $conexao->query($sql)->fetchall();
        foreach ($stmt as $row)
        {
            $this->cd_fornecedor = $row[0] + 1;
        }
     $this->razao                = trim($_POST["razaoSocial"]);
     $this->Fantasia             = trim($_POST["fantasia"]);
     $this->cnpj                 = trim($_POST["cnpjcpf"]);
     $this->inscricaoEstadual    = trim($_POST["inscricao"]);
     $this->email                = trim($_POST["email"]);
     $this->telefone             = trim($_POST["telefone"]);
     $this->whatsApp             = trim($_POST["whatsApp"]);
     $this->endereco             = trim($_POST["endereco"]);
     $this->cep                  = trim($_POST["CEP"]);
     $this->bairro               = trim($_POST["Bairro"]);
     $this->cidade               = trim($_POST["Cidade"]);
     $this->uf                   = trim($_POST["UF"]);
     $this->dataCadastro         = date("Y-m-d");
 }

 function inserirFornecedor($conn)
 {

     $sql = "INSERT INTO TblFornecedores (Cdfornecedor, DsRazao, DsFantasia, CdCnpjCpf, CdIE, Dsemail, DsTelefone, DsWattsapp, Dsendereco, CdCep, DsBairro, dsCidade)
                VALUES ('$this->cd_fornecedor', '$this->razao', '$this->Fantasia', '$this->Fantasia', '$this->inscricaoEstadual', '$this->email', '$this->telefone', '$this->whatsApp', '$this->endereco', '$this->cep', '$this->bairro', '$this->cidade')";
     $conn->query($sql) or $conn->errorInfo();

     echo "<p> Cadastro feito </p>";

 }

}