<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<h1>Área de login</h1>
        <div class="boxLogin"> 
        <form action="valida.php" method="post">
            <label for="login">Login</label><br>
            <input type="text" name="login" id="login" required><br><br>
            <label for="senha">Senha</label><br>
            <input type="password" name="pass" id="senha" required><br><br>
            <input type="submit" name="enter" value="Login">
        </form>
        </div>
    </body>
</html>