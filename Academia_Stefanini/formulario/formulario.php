<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnicas de Formulários</title>
</head>
<body>
    <div id="global">
        <header>
            <h1>Cadastro de Clientes </h1>
        </header>
<main>
    <form id="" method="post" action="processar.php"> </form>
    <label for="nome"> Nome: </label>
    <input id="nome" name="nome" type="text" placeholter="Digite seu nome ..." require></input>

    <label for="email"> Email: </label>
    <input id="email" name="email" type="text" placeholter="Digite seu email ..." require></input>

    <label for="estado"> Estado: </label>
    <select name="estado" id="estado">
        <option> Selecione Aqui </option>
        <optgroup>
            <option value="SP"> São Paulo </option> 
            <option value="MG"> Minas Gerais </option> 
            <option value="PR"> Paraná </option> 
        </optgroup>
    </select> 

    <label for="cidade"> Cidade: </label>
    <input id="cidade" name="cidade" type="text" placeholter="Digite sua cidade ..." require></input>
    <button type="submit">Enviar</button>
    </form>
</main>
        
</div>
    
</body>
</html>