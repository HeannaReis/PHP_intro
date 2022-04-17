<?php
    session_start();

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

if (empty($nome) || ($idade) == '') 
{
    $_SESSION['mensagem'] = 'Preencha todos os campos corretamente !!!';
    header("Location: index.php");
    return;
}
elseif (strlen($nome) < 3)
{
    $_SESSION['mensagem'] =  "O Nome deve conter mais do que 3 caracteres !!! ";
    header("Location: index.php");
    return;
}
elseif (strlen($nome) > 40)
{
    $_SESSION['mensagem'] = "O Nome não deve conter mais do que 40 caracteres !!!";
    header("Location: index.php");
    return;
}
elseif (!is_numeric($idade))
{
    $_SESSION['mensagem'] = "Campo Idade só aceita números !!!";
    header("Location: index.php");
    return;
}

else if($idade < 6)
{
    {
        $_SESSION['mensagem']= " Desculpe " .$nome. " , você ainda não pode competir !!! ";
        header("Location: index.php");
        return;
    }    
}
else if($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Infantil')
        {
            $_SESSION['mensagem'] = "O nadador " .$nome. " Compete na Categoria: " .$categorias[$i];   
            header("Location: index.php");
            return;
        }    
    }    
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Juvenil')
        {
            $_SESSION['mensagem'] = "O nadador " .$nome. " Compete na Categoria: " .$categorias[$i]; 
             header("Location: index.php");
             return;
        }  
    }              
}
else if ($idade >= 19 && $idade <= 60)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Adulto')
        {
            $_SESSION['mensagem'] = "O nadador " .$nome. " Compete na Categoria: " .$categorias[$i];
            header("Location: index.php");
             return;
        }
    }    
}
else
{
    $_SESSION['mensagem'] = "O nadador " .$nome. " Compete na Categoria:  Senior";
    header("Location: index.php");
             return;
}
?>