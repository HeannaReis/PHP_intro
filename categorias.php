<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Juvenil';
$categorias[] = 'Adulto';
$categorias[] = 'Senior';

//print_r($categorias);

//$categorias = [];
//$categorias = array( "Infantil", "Juvenil", "Adulto", "Senior");
//print_r($categorias);

$nome = $_POST['nome'];

$idade = $_POST['idade'];

if (empty($nome) || ($idade) == "") 
{
    echo "Preencha todos os campos corretamente ";
    return;
}
if (strlen($nome) < 3)
{
    echo "O Nome deve conter mais do que 3 caracteres ";
    return;
}
if (strlen($nome) > 40)
{
    echo "O Nome não deve conter mais do que 40 caracteres ";
    return;
}
if (!is_numeric($idade))
{
    echo "Campo Idade só aceita números";
}

else if($idade < 6)
{
    {
        echo " Desculpe " .$nome. " , você ainda não pode competir!! ";
        return;
    }    
}
else if($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Infantil')
        {
            echo "O nadador " .$nome. " Compete na Categoria: " .$categorias[$i];   
            break;                
        }    
    }    
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Juvenil')
        {
            echo "O nadador " .$nome. " Compete na Categoria: " .$categorias[$i]; 
            break;
        }  
    }              
}
else if ($idade >= 19 && $idade <= 60)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Adulto')
        {
            echo "O nadador " .$nome. " Compete na Categoria: " .$categorias[$i];
            break;
        }
    }    
}
else
{
    echo "O nadador " .$nome. " Compete na Categoria:  Senior";
}
