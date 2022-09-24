<!-- form, array, session -->
<?php
session_start();
?>
<form method="post">
    nome <input type="text" name="nome">
    email <input type="text" name="email">
    telefone <input type="text" name="telefone">
    <input type="submit" value="Submit">
</form>
<?php
if (empty($_POST['nome'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $array = [
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone
    ];
    $_SESSION['array'][] = $array;
    unset($array);
    header('Location: index.php');
}
?>
<table border='1'>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </tr>
    <?php
    if (isset($_SESSION['array'])) {
        foreach ($_SESSION['array'] as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['nome'] . '</td>';
            echo '<td>' . $value['email'] . '</td>';
            echo '<td>' . $value['telefone'] . '</td>';
            echo '</tr>';
        }
    }
    ?>
</table>

