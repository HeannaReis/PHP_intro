<?php


?>
<!DOCTYPE html>
        <head>
                <title> Dados </title>
        </head>
        <body>
             <h1> Dados Cadastrais </h1>
             <h4><form name="Dados" method="post" action="">
                <section> 
                <p>
                        <label for="nome"> Nome </label><br>
                        <input type="text" name="nome" placeholder="digite seu nome..." required>
                </p>
                <p>
                        <label for="nome">CPF</label><br>
                        <input type="text" name="cpf" placeholder="digite seu CPF..." required>
                </P>
                <p>
                        <label for="nome">RG</label><br>
                        <input type="text" name="rg" placeholder="digite número do RG...">
                </p>
                <p>
                        <label for="nome">E-mail</label><br>
                        <input type="text" name="email" placeholder="digite seu email...">
                </p>    
                
                        <label for="telefone">Telefone</label><br>
                        <input type="text" name="telefone" placeholder="digite seu telefone...">
                <p>     
                        <label for="endereco">Endereco</label><br>
                        <input type="text" name="endereco" placeholder="digite seu endereço...">
                </p>  
                <p>     <label for="numero">Número</label><br>
                        <input type="text" name="numero" placeholder="">
                </p>
                <p>     
                        <label for="complemento">Complemento</label><br>
                        <input type="text" name="complemento" placeholder="">
                </p>
                <p>     <label for="Bairro">Bairro</label><br>
                        <input type="text" name="bairro" placeholder="">
                </p>
                <p>
                        <label for="cnameade">Cidade</label><br>
                        <input type="text" name="cidade" placeholder="">
                </p>
                <p>
                        <label for="Estado">Estado</label><br>
                        <input type="text" name="estado" placeholder="">
                </p>
                <p>
                        <label for="nome">Login</label><br>
                        <input type="text" name="login" placeholder="cadastre seu usuário...">
                </p>
                <p>
                        <label for="nome">Cadastar Senha</label><br>
                        <input type="text" name="senha" placeholder="cadastre sua senha...">
                </p>
                        <label for="nome">Confirmar Senha</label><br>
                        <input type="text" name="confirmar_senha" placeholder="confirme sua senha...">
                </p>
                        <button type="submit" name="enviar">Cadastrar</button>
                        <button type="reset" name="limpar">Limpar</button>
              
                </section>
                </form></h4>
        </body>        
        </html>