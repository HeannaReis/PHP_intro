<html>

<head>

    <meta charset="utf-8">

    <style>
    
    table{
    width: 90% !important; /*Importante manter o !important rs */
    margin: auto;
    background: #1e1e1e;
    border: 5px solid 	#6495ED;
     }
     
     td {
    color: 	#ADD8E6;
    text-align: center;
    font-family: "Audiowide", sans-serif;
     }
    
    th {
    color: white;
    font-weight: bold;
    font-size: 20px
    }
    
    h2 {
    color: #00008B;
    text-align: center;
    font-style: italic;    
    }
     
    </style>

</head>

<body>
	 <h2>Alunos 3º módulo Desenvolvimento de Sistemas</h2>

<table border="1">

<tr>
    <th rowspan="2">Aluno</th>
    <th rowspan="2">Email</th>
    <th rowspan="2">Telefone</th>
    <th colspan="6" align="center">Endereço</th><tr>
    <th>Logradouro</th>
    <th>Número</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>CEP</th>
</tr>

    <?php 

        $alunos = [
    ['nome' => 'João da Silva', 'cpf' => '11122233344', 'tel' => '(11)111111111', 'endereco' => 
     ['logradouro' => 'Rua Feliz', 'numero' => '10', 'bairro' => 'Jardim Alegre', 'cidade' => "São Paulo", 'estado' => 'SP', 'cep' => '11111-111']],
    
    ['nome' => 'Fulano da Silva', 'cpf' => '22222222222', 'tel' => '(11)222222222', 'endereco' =>
     ['logradouro' => 'Rua Azul', 'numero' => '13', 'bairro' => 'Jardim Florido', 'cidade' => "São Paulo", 'estado' => 'SP', 'cep' => '22222-222']],
    
    
    ['nome' => 'Beltrano da Silva', 'cpf' => '33333333333', 'tel' => '(11)333333333', 'endereco' =>
     ['logradouro' => 'Rua Beija Flor', 'numero' => '15B', 'bairro' => 'Jardim Silvestre', 'cidade' => "São Paulo", 'estado' => 'SP', 'cep' => '33333-333']],
    
    
    ['nome' => 'Cliclano Pereira', 'cpf' => '44444444444', 'tel' => '(11)444444444', 'endereco' => 
     ['logradouro' => 'Estrada Longa de Pedra', 'numero' => '178', 'bairro' => 'Parque do Lago', 'cidade' => "São Paulo", 'estado' => 'SP', 'cep' => '44444-444']]
];

foreach ($alunos as $key => $value){
    echo '<tr><td>'
    .$value['nome']
    .'</td><td>'
    .$value['cpf'] 
    .'</td><td>'
    .$value['tel']
    .'</td><td>'
    .$value['endereco']['logradouro']
    .'</td><td>'
    .$value['endereco']['numero']
    .'</td><td>'
    .$value['endereco']['bairro']
    .'</td><td>'
    .$value['endereco']['cidade']
    .'</td><td>'
    .$value['endereco']['estado']
    .'</td><td>'
    .$value['endereco']['cep']
    .'</td></tr>';
}
		
		?>

</table>
