
<?php
session_start();
?>
<form method="post">
    valor1 <input type="number" name="valor1">
    valor2 <input type="number" name="valor2">
    valor3 <input type="number" name="valor3">
    <input type="submit" value="Submit">
</form>
<?php
if (!empty($_POST['valor1'])) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $array = [
        'valor1' => $valor1,
        'valor2' => $valor2,
        'valor3' => $valor3
    ];
    $_SESSION['array'][] = $array;
    unset($array);
    header('Location: soma_array.php');
}
?>
<table border='1'>
    <tr>
        <th>valor 1</th>
        <th>valor 2 </th>
        <th>valor 3</th>
    </tr>
    <?php
    if (isset($_SESSION['array'])) {
        
        $soma = 0;

        foreach ($_SESSION['array'] as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['valor1'] . '</td>';
            echo '<td>' . $value['valor2'] . '</td>';
            echo '<td>' . $value['valor3'] . '</td>';
            echo '</tr>';

           $soma = array_sum(['array']);
           echo $soma;

        }
      

     
        }
    
    ?>
</table>

