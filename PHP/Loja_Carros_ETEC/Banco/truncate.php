<?php
include("../config.php");
$limpa = "TRUNCATE cliente";
$query = mysqli_query($conn, $limpa);
if($query){
    echo '<script>alert("Zerou!!!")</script>';
    header('Location: ListaClientes.php');
    exit;
}else{
    echo '<script>alert("Deu Ruim!!!")</script>';
    header('Location: ListaClientes.php');
    exit;
}
?>