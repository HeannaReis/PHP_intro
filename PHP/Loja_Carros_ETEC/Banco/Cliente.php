<?php

function CadCliente($conn, $nome_razaosocial, $cpf_cnpj, $rg_ie, $email, $telefone, $endereco, $numero,
                    $complemento, $cep, $bairro, $cidade, $estado, $data_nascimento) {
	$nome_razaosocial = mysqli_real_escape_string($conn, $nome_razaosocial);
	$cpf_cnpj = mysqli_real_escape_string($conn,  $cpf_cnpj);
    $rg_ie = mysqli_real_escape_string($conn,  $rg_ie);
    $email = mysqli_real_escape_string($conn,  $email);
    $telefone = mysqli_real_escape_string($conn,  $telefone);
    $endereco = mysqli_real_escape_string($conn,  $endereco);
    $numero = mysqli_real_escape_string($conn,  $numero);
    $cep = mysqli_real_escape_string($conn,  $cep);
    $bairro = mysqli_real_escape_string($conn,  $bairro);
    $cidade = mysqli_real_escape_string($conn,  $cidade);
    $estado = mysqli_real_escape_string($conn,  $estado);
    $data_nascimento = mysqli_real_escape_string($conn,  $data_nascimento);

    //Inserindo dados completos com todos os campos preenchidos
	if($nome_razaosocial && $cpf_cnpj && $rg_ie && $email && $telefone && $endereco && $numero && $complemento
     && $cep && $bairro && $cidade && $estado && $data_nascimento) {
		$sql = "INSERT INTO cliente (nome_razaosocial, cpf_cnpj, rg_ie, email, telefone, endereco, numero, complemento,
                                      cep, bairro, cidade, estado, data_nascimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		
		$stmt = mysqli_stmt_init($conn);
		 
		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sssssssssssss', $nome_razaosocial, $cpf_cnpj, $rg_ie, $email, $telefone,
                                                        $endereco, $numero, $complemento, $cep, $bairro, $cidade,
                                                        $estado, $data_nascimento);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
        echo '<script>alert("Cadastro Realizado com sucesso!!!")</script>';
		return true;
	}
    //Inserindo dados sem o complemento
	if($nome_razaosocial && $cpf_cnpj && $rg_ie && $email && $telefone && $endereco && $numero
    && $cep && $bairro && $cidade && $estado && $data_nascimento) {
       $sql = "INSERT INTO cliente (nome_razaosocial, cpf_cnpj, rg_ie, email, telefone, endereco, numero,
                                     cep, bairro, cidade, estado, data_nascimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       
       $stmt = mysqli_stmt_init($conn);
        
       if(!mysqli_stmt_prepare($stmt, $sql)) 
           exit('SQL error');
       
       mysqli_stmt_bind_param($stmt, 'ssssssssssss', $nome_razaosocial, $cpf_cnpj, $rg_ie, $email, $telefone,
                                                       $endereco, $numero, $cep, $bairro, $cidade,
                                                       $estado, $data_nascimento);
       mysqli_stmt_execute($stmt);
       mysqli_close($conn);
       echo '<script>alert("Cadastro Realizado com sucesso!!!")</script>';
       return true;
   }
}  