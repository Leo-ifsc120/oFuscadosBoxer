var Connection = require('tedious').Connection;
var config = {
    server: 'localhost',  //update me
    authentication: {
        type: 'ntlm',
        options: {
            domain: 'sqlexpress',    //update me
            userName: 'LEONARDO_NOTE', //update me
            password: ''  //update me
        }
    },
    options: {
        encrypt: false,
        database: 'Oficina',  //update me
        port: 1433
    }
};
var connection = new Connection(config);
connection.on('connect', function(err) {
    if (err) {
        console.log('Connection failed', err);
    } else {
        console.log('Connected with Windows authentication');
    }
});

connection.connect();

var Request = require('tedious').Request
var TYPES = require('tedious').TYPES;

function callVeiculos()
{
    event.preventDefault()
    location.href = "../Tables/veiculos.php";

}
function callClientes()
{
    event.preventDefault()
    location.href = "../Tables/Clientes.php";

}
function callFornecedores()
{
    event.preventDefault()
    location.href = "../Tables/Fornecedores.php";

}
function callProdutos()
{
    event.preventDefault()
    location.href = "../Tables/Produtos.php";

}
function callServicos()
{
    event.preventDefault()
    location.href = "../Tables/Servicos.php";

}

function insertFornecedor()
{
    event.preventDefault()
    location.href = "../Inserts/InsertFornecedor.php";


    function insert() {
        var request = new Request(
            "INSERT INTO Fornecedores (nome, cnpj, telefone) VALUES (@nome, @cnpj, @telefone);",
            function (err) {
                if (err) {
                    console.log('Error inserting data', err);
                } else {
                    console.log('Data inserted successfully');
                }
            }
        );

        request.addParameter('nome', TYPES.VarChar, document.getElementById('nome').value);
        request.addParameter('cnpj', TYPES.VarChar, document.getElementById('cnpj').value);
        request.addParameter('telefone', TYPES.VarChar, document.getElementById('telefone').value);
    }

}