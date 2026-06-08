<?php

class Fornecedores
{

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

 function receberDados()
 {
     $this->razao                = $_POST["razaoSocial"];
     $this->Fantasia             = $_POST["fantasia"];
     $this->cnpj                 = $_POST["cnpjcpf"];
     $this->inscricaoEstadual    = $_POST["inscricao"];
     $this->email                = $_POST["email"];
     $this->telefone             = $_POST["telefone"];
     $this->whatsApp             = $_POST["whatsApp"];
     $this->endereco             = $_POST["endereco"];
     $this->cep                  = $_POST["CEP"];
     $this->bairro               = $_POST["Bairro"];
     $this->cidade               = $_POST["Cidade"];
     $this->uf                   = $_POST["UF"];
     $this->dataCadastro         = date("d-m-y H:i:s");
 }

 function inserirFornecedor($conn)
 {

     $sql = "INSERT INTO TblFornecedores (DsRazao, DsFantasia, CdCnpjCpf, ) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

 }

}