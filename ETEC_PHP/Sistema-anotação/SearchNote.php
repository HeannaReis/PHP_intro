<?php

require_once 'vendor/autoload.php';

$data = $_POST['data'];
$desc = $_POST['desc'];

$search = new \App\Model\Notas();
$dados = new \App\Model\NotaData();

$dados->setData($data);
$dados->setDesc($desc);

if($search->Pesquisa($dados)):
     foreach($search->Pesquisa($dados) as $notes):
          echo '
          <tr>
               <td>'.$notes['descricao'].'</td>
               <th>'.$notes['data'].'</th>
               <td><a href="?nota='.$notes['id'].'" class="material-icons">edit</a></td>
               <td><a href="DeleteNote.php?excluir='.$notes['id'].'" class="material-icons">delete</a></td>
          </tr>
          ';
     endforeach;
else:
     echo '
     <tr>
          <td>Nenhuma nota encontrada</td>
     </tr>
     ';
endif;