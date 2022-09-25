<?php


require_once '../Loja_Carros_ETEC/config.php';
require_once '../Loja_Carros_ETEC/Banco/Cliente.php';

if (isset($_POST["nome_razaosocial"]) && isset($_POST["cpf_cnpj"]) && isset($_POST["rg_ie"])  && isset($_POST["email"])
&& isset($_POST["telefone"]) && isset($_POST["endereco"]) && isset($_POST["numero"]) 
&& isset($_POST["cep"]) && isset($_POST["bairro"]) && isset($_POST["cidade"]) && isset($_POST["estado"]) && isset($_POST["data_nascimento"]))
{
   CadCliente($conn, $_POST["nome_razaosocial"], $_POST["cpf_cnpj"], $_POST["rg_ie"], $_POST["email"],
                     $_POST["telefone"], $_POST["endereco"], $_POST["numero"], $_POST["complemento"], $_POST["cep"], 
                     $_POST["bairro"], $_POST["cidade"], $_POST["estado"], $_POST["data_nascimento"]);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/style.css">

    <title>    
        Cadastro de Clientes
    </title>
</head>

<body>
 <div class="banner">
            <div class="container">
            <h2 class="titulo">Cadastro Clientes</h2> 
           </div>
          <div class="cliente_cadastrado ">
           <h2> <a href="./Banco/ListaClientes.php">Clientes Cadastrados</a></h2> 
</div>
</div>

<div>
<form action="../Loja_Carros_ETEC/CadCliente.php" method="POST">
        <label>Nome / Razão Social*</label><br />
        <input
          type="text" name="nome_razaosocial" placeholder="Nome ou Razão Social" required/><br />
        <label>CPF/CNPJ*</label><br />
        <input
          type="text" name="cpf_cnpj" placeholder="Somente números" required /><br />
        <label>RG/IE*</label><br />
        <input
          type="text" name="rg_ie" placeholder="Somente números" required /><br />
        <label>E-mail*</label><br />
        <input type="text" name="email"   required/><br />     
        <label>Telefone*</label><br />
        <input type="text" name="telefone" placeholder="Somente números"  required /><br />
        <label>Endereço*</label><br />
        <input type="text" name="endereco" required /><br />
        <label>Número*</label><br />
        <input type="text" name="numero" required /><br />
        <label>Complemento</label><br />
        <input type="text" name="complemento"/><br />
        <label>CEP*</label><br />
        <input type="text" name="cep" placeholder="Somente números" required /><br />
        <label>Bairro*</label><br />
        <input type="text" name="bairro" required /><br />
        <label>Cidade*</label><br />
        <input type="text" name="cidade" required /><br /> 
        <label>Estado*</label><br />
        <select  name="estado" required>
          <option value="">Selecione</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <option value="EX">Estrangeiro</option>
        </select><br />   
        <label>Data Nascimento*</label><br />
        <input type="date" name="data_nascimento" required /><br />    
      <br />
        <input type="submit" value="Cadastrar" name="cadastrar">
    </form>
    
</div>
    </body>
</html>
