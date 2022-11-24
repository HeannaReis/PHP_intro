<div class="notas">
     <div class="topo">
          <div class="pesquisa">
               <b>Pesquisa:&nbsp;&nbsp;</b>
               <input type="search" name="pesq" id="pesq">&nbsp;&nbsp;
               <input type="date" name="data" id="data">&nbsp;&nbsp;
               <button id="search">Pesquisar</button>
          </div>
          <div class="user">
               <input type="number" name="userid" id="userid" hidden value="<?php echo $_SESSION['login'][0] ;?>">
               <button id="sair" class="material-icons">logout</button>
          </div>
     </div>
     <div class="corpo">
          <div class="cadnota">
               <?php
               $n = @$_GET['nota'];
               if(isset($n)):
                    $new = new \App\Model\NotaData();
                    $yes = new \App\Model\Notas();
                    $new->setId($n);
                    foreach($yes->EditaNota($new) as $row):
               ?>
               <div>
                    <span id="alert"></span>
                    <section>
                         <input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
                         <label for="desc"></label>
                         <textarea name="desc" id="descricao" cols="30" rows="10"><?php echo $row['descricao'];?></textarea>
                    </section>
                    <section class="bntform">
                         <button id="editar">Editar</button>
                    </section>
               </div>
               <?php
               endforeach;
          else:
               ?>
               <div class='cad'>
                    <span id="alert"></span>
                    <section>
                         <label for="desc"></label>
                         <textarea name="desc" id="descricao" cols="30" rows="10"></textarea>
                    </section>
                    <section class="bntform">
                         <button id="anotar">Anotar</button>
                    </section>
               </div>
          <?php
          endif;
          ?>
          </div>
          <div class="listnota">
               <table>
                    <thead>
                         <tr>
                              <th>Anotação</th>
                              <th>Data Registro</th>
                         </tr>
                    </thead>
                    <tbody>
                         <table id="lista"></table>
                    </tbody>
               </table>
          </div>
     </div>
</div>
