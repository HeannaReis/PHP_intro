<div class="login">
     <form action="../CreateUser.php" method="post">
          <div>
               <h2>Cadastro</h2>
          </div>
          <section>
               <section>
                    <label for="username">User Name:</label>&nbsp;
                    <input type="text" name="username" id="username" value="<?php if(isset($_GET['name'])): echo $_GET['name'] ; endif;?>">
               </section>
               <section> 
                    <label for="login">Login:</label>&nbsp;
                    <input type="text" name="login" id="login" value="<?php if(isset($_GET['user'])): echo $_GET['user']; endif;?>">
               </section>
          </section>
          <section>
               <section>
                    <label for="pass">Password:</label>&nbsp;
                    <input type="password" name="pass" id="pass">
               </section>
               <section>
                    <label for="repass">Repeat Password:</label>&nbsp;
                    <input type="password" name="repass" id="repass">
               </section>
          </section>
          <div>
               <button type="submit">Submit</button>
          </div>
          <div>
               <span style="color: red;">
                    <?php
                    if(isset($_GET['msg'])):
                         echo $_GET['msg'];
                    endif;
                    ?>
               </span>
          </div>
          <div>
               <a href="http://localhost">Já possui conta? Entre agora mesmo!</a>
          </div>
     </form>
</div>