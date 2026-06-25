<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleTabelas.css">
</head>
<body>

<script src="../../JavaScript/Script.js"></script>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <h1 id="title"><strong>OFuscadosBoxer</strong></h1>
</header>

<div class="container">


        <form action="Fornecedores.php" method="post">

            <div class="button">

                <div id="tables">
                    <input type="button" onclick="callClientes()" id="clientes" name="clientes">
                    <input type="button" onclick="callFornecedores()" id="fornecedores" name="fornecedores">
                    <input type="button" onclick="callProdutos()" id="produtos" name="produtos">
                    <input type="button" onclick="callServicos()" id="servicos" name="servicos">
                    <input type="button" onclick="callVeiculos()" id="veiculos" name="veiculos">
                </div>


                <div id="crud">

                    <div id="search">
                                <input type="submit" class="crud" id="pesquisar" name="pesquisar" value="Pesquisar">
                                <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o ID para alterar:">
                    </div>

                    <div id="mod">
                        <input type="button" onclick="callInsertFornecedor()" class="crud" id="inserir" name="inserir" value="inserir">
                        <input type="button" onclick="callAlterarFornecedor()" class="crud" id="alterar" name="alterar" value="alterar">
                        <input type="button" onclick="callDeletarFornecedor()" class="crud" id="deletar" name="deletar" value="deletar">
                    </div>

                </div>




            </div>

            <table>
                <tr id='theader'>
                    <th><input type='radio' name='index' id='id' value='Cdfornecedor'><label for='id'>ID</label></th>
                    <th><input type='radio' name='index' id='razao_social' value='DsRazao'><label for='razao_social'>Razão social/Nome</label></th>
                    <th><input type='radio' name='index' id='fantasia' value='DsFantasia'><label for='fantasia'>Fantasia</label></th>
                    <th><input type='radio' name='index' id='cnpj_cpf' value='CdCnpjCpf'><label for='cnpj_cpf'>Cnpj/CPF</label></th>
                    <th><input type='radio' name='index' id='telefone' value='DsTelefone'><label for='telefone'>Telefone</label></th>
                    <th><input type='radio' name='index' id='endereco' value='DsEndereco'><label for='endereco'>Endereço</label></th>
                    <th><input type='radio' name='index' id='cep' value='DsCep'><label for='cep'>CEP</label></th>
                    <th><input type='radio' name='index' id='email' value='Dsemail'><label for='email'>E-Mail</label></th>
                    <th><input type='radio' name='index' id='bairro' value='DsBairro'><label for='bairro'>Bairro</label></th>
                    <th><input type='radio' name='index' id='cidade' value='dsCidade'><label for='cidade'>Cidade</label></th>
                    <th><input type='radio' name='index' id='uf_regiao' value='DSRegiao'><label for='uf_regiao'>UF/Região</label></th>
                    <th><input type='radio' name='index' id='inscricao_estadual' value='CdIE'><label for='inscricao_estadual'>Inscrição Estadual</label></th>
                    <th><input type='radio' name='index' id='whatsapp' value='DsWhatsapp'><label for='whatsapp'>WhatsApp</label></th>
                    <th><input type='radio' name='index' id='contato' value='DsContato'><label for='contato'>Contato</label></th>
                    <th><input type='radio' name='index' id='data_cadastro' value='DtCadastro'><label for='data_cadastro'>Data Cadastro</label></th>
                    <th><input type='radio' name='index' id='nu_endereco' value='Nrendereco'><label for='nu_endereco'>Nu Endereço</label></th>
                    <th><input type='radio' name='index' id='complemento' value='Dscomplemento'><label for='complemento'>Complemento</label></th>
                </tr>

                <?php

                require "../DataBase/Connection.php";



                if(isset($_POST['pesquisar']))
                {
                    if(!empty($_POST['index']) && !empty($_POST['pesquisa']))
                    {
                        $index = $_POST['index'];
                        $pesquisa = $_POST['pesquisa'];
                        $stmt = "select * from TblFornecedores where $index like '%$pesquisa%'";
                    }
                    else
                    {
                        $stmt = "select * from TblFornecedores";
                    }
                }
                else
                {
                    $stmt = "select * from TblFornecedores";
                }

                $result = $conn->query($stmt)->fetchAll();
                foreach ($result as $row) {


                    echo "<tr>
                <td> $row[0]  </td>
                <td> $row[1]  </td>
                <td> $row[2]  </td>
                <td> $row[10]  </td>
                <td> $row[3]  </td>
                <td> $row[4]  </td>
                <td> $row[5]  </td>
                <td> $row[6]  </td>
                <td> $row[7]  </td>
                <td> $row[8]  </td>
                <td> $row[9]  </td>
                <td> $row[11]  </td>
                <td> $row[12]  </td>
                <td> $row[13]  </td>
                <td> $row[14]  </td>
                <td> $row[15]  </td>
                <td> $row[16]  </td>

           </tr>";
                }



                $stmt = null;



                ?>

            </table>

        </form>



</div>

<p>Fornecedores</p>

</body>
</html>
