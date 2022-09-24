<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>    
        Clientes Cadastrados
    </title>
</head>

<div class="container">

<body>
<a href="truncate.php" style="color: #F00">Limpa Tabela</a>&nbsp &nbsp &nbsp &nbsp<a href="../CadCliente.php" >Cadastro de Clientes</a>
<?php
include("../config.php");
$select = "SELECT * FROM cliente";
$query = mysqli_query($conn, $select);
while($resultado = mysqli_fetch_object($query)){
    echo "<hr>";
    echo "<br />";
    echo "ID_Cliente: "     .$resultado->id_cliente."<br />";
    echo "Nome: "           .$resultado->nome_razaosocial."<br />";
    echo "CPF/CNPJ: "       .$resultado->cpf_cnpj."<br />";
    echo "RG/IE: "          .$resultado->rg_ie."<br />";
    echo "Email: "          .$resultado->email."<br />";
    echo "Telefone: "       .$resultado->telefone."<br />";
    echo "Endereco: "       .$resultado->endereco."<br />";
    echo "Numero: "         .$resultado->numero."<br />";
    echo "Complemento: "    .$resultado->complemento."<br />";
    echo "Cep: "            .$resultado->cep."<br />";
    echo "Bairro: "         .$resultado->bairro."<br />";
    echo "cidade: "         .$resultado->cidade."<br />";
    echo "Estado: "         .$resultado->estado."<br />";
    echo "Data Nascimento: ".$resultado->data_nascimento."<br />";
    echo "<br /><hr>";   
    }

?>
</div>  
<body>
</html>
