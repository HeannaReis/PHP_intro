<?php


?>
<!DOCTYPE html>
        <head>
                <title> Usuários</title>
        </head>
        <body>
             <h1> Usuários </h1>
             <h4><form name="users" method="post" action="">
                <section> 
                <p>
                        <label for="login"> Login </label><br>
                        <input type="text" name="login" placeholder="digite seu login..." required>
                </p>
                <p>
                        <label for="senha">Senha</label><br>
                        <input type="password" name="senha" placeholder="digite sua senha..." required> 
                </P>
                <p>
                        <label for="nome">E-mail</label><br>
                        <input type="text" name="email" placeholder="digite seu email..." required>
                </p>    
                <p>    
                        <button type="submit" name="Editar">Editar</button>
                        <button type="reset" name=reset>Limpar</button>
                    </p>
                </section>
                </form></h4>
        </body>        
        </html>