function callVeiculos()
{
    event.preventDefault()
    location.href = "../Tables/TblVeiculos.php";

}
function callClientes()
{
    event.preventDefault()
    location.href = "../Tables/TblClientes.php";

}
function callFornecedores()
{
    event.preventDefault()
    location.href = "../Tables/TblFornecedores.php";

}
function callProdutos()
{
    event.preventDefault()
    location.href = "../Tables/TblProdutos.php";

}
function callServicos()
{
    event.preventDefault()
    location.href = "../Tables/TblServicos.php";

}

function callInsertFornecedor()
{
    event.preventDefault()
    location.href = "../FormInserts/FormInsertFornecedor.php";
}

function callAlterarFornecedor()
{
    event.preventDefault()
    let id = document.getElementById("pesquisa").value;


    if(id !== "")
    {
        location.href = "../FormUpdates/FormUpdateFornecedor.php?id=" + id;
    }
    
}

function callDeletarFornecedor()
{
    event.preventDefault()
}

function callAlterarCliente()
{
    event.preventDefault()
    let id = document.getElementById("pesquisa").value;

    if(id !== "")
    {
        location.href = "../FormUpdates/FormUpdateCliente.php?id=" + id;
    }
}

function callDeletarCliente()
{
    event.preventDefault()
}

function callInsertCliente()
{
    event.preventDefault()
    location.href = "../FormInserts/FormInsertCliente.php";
}

function callInsertProduto()
{
    event.preventDefault()
    location.href = "../FormInserts/FormInsertProduto.php";
}

function callAlterarProduto()
{
    event.preventDefault()
    let id = document.getElementById("pesquisa").value;

    if(id !== "")
    {
        location.href = "../FormUpdates/FormUpdateProduto.php?id=" + id;
    }
}

function callDeletarProduto()
{
    event.preventDefault()
}

function callInsertServico()
{
    event.preventDefault()
    location.href = "../FormInserts/FormInsertServico.php";
}

function callAlterarServico()
{
    event.preventDefault()
    let id = document.getElementById("pesquisa").value;

    if(id !== "")
    {
        location.href = "../FormUpdates/FormUpdateServico.php?id=" + id;
    }
}

function callDeletarServico()
{
    event.preventDefault()
}

function callInsertVeiculo()
{
    event.preventDefault()
    location.href = "../FormInserts/FormInsertVeiculo.php";
}

function callAlterarVeiculo()
{
    event.preventDefault()
    let id = document.getElementById("pesquisa").value;

    if(id !== "")
    {
        location.href = "../FormUpdates/FormUpdateVeiculo.php?id=" + id;
    }
}

function callDeletarVeiculo()
{
    event.preventDefault()
}

