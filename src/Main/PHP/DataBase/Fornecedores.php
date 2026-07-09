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
    public $contato;
    public $nrendereco;

 function receberDados($conexao)
 {

     if($_POST["id"] == "")
     {
         $this->cd_fornecedor = $conexao->query("SELECT MAX(Cdfornecedor) FROM TblFornecedores")->fetchColumn() + 1;
     }
     else
     {
         $this->cd_fornecedor = $_POST["id"];
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
     $this->contato              = trim($_POST["contato"]);
     $this->nrendereco           = trim($_POST["numero"]);
     $this->dataCadastro         = date("Y-m-d h:i:s");
 }

 function inserirFornecedor($conn)
 {

     $sql = "INSERT INTO TblFornecedores (Cdfornecedor, DsRazao, DsFantasia, CdCnpjCpf, CdIE, Dsemail, DsTelefone, DsWattsapp, Dsendereco, CdCep, DsBairro, dsCidade, DtCadasto, DsRegiao, Dscontato, Nrendereco)
                VALUES ('$this->cd_fornecedor', '$this->razao', '$this->Fantasia', '$this->Fantasia', '$this->inscricaoEstadual', '$this->email', '$this->telefone', '$this->whatsApp', '$this->endereco', '$this->cep', '$this->bairro', '$this->cidade', '$this->dataCadastro', '$this->uf', '$this->contato', '$this->nrendereco')";
     $conn->query($sql) or $conn->errorInfo();

     echo "<p> Cadastro feito </p>";

 }

 function alterarFornecedor($conn)
    {
        $sql = "UPDATE TblFornecedores SET DsRazao = '$this->razao', DsFantasia = '$this->Fantasia', CdCnpjCpf = '$this->cnpj', CdIE = '$this->inscricaoEstadual', Dsemail = '$this->email', DsTelefone = '$this->telefone', DsWattsapp = '$this->whatsApp', Dsendereco = '$this->endereco', CdCep = '$this->cep', DsBairro = '$this->bairro', dsCidade = '$this->cidade' WHERE Cdfornecedor = '$this->cd_fornecedor'";
        $conn->query($sql) or $conn->errorInfo();

        echo "<p> Cadastro alterado </p>";
    }

}