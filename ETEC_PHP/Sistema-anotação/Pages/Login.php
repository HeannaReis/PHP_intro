<div class="login">
     <form action="../VerifyAccount.php" method="post">
          <div>
               <h2>Login</h2>
          </div>
          <section>
               <label for="login">Login:</label>
               <input type="text" name="login" id="login"
               value="<?php
                    if(isset($_GET['login'])):
                         echo $_GET['login'];
                    endif;
               ?>"
               >
          </section>
          <section>
               <?php
               if(isset($_GET['msg'])):
                    echo '<span style="color:red">'.$_GET['msg'].'<span>';
               endif;
               ?>
          </section>
          <section>
               <label for="pass">Password:</label>
               <input type="password" name="pass" id="pass">
          </section>
          <div>
               <button type="submit">Login</button>
          </div>
          <div>
               <a href="?page=Create">Não possui conta? Faça a sua agora mesmo.</a>
          </div>
     </form>
</div>