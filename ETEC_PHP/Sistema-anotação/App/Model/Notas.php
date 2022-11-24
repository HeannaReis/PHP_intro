<?php

namespace App\Model;

if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
     // session isn't started
     session_start();
}

class Notas 
{
     public function Create(NotaData $n)
     {
          $sql = "INSERT INTO anotacoes (descricao, data, user_id) VALUES (?, ?, ?)";

          $stmt = Conection::getConn()->prepare($sql);

          $stmt->bindValue(1, $n->getDesc());
          $stmt->bindValue(2, $n->getData());
          $stmt->bindValue(3, $_SESSION['login'][0]);

          if($stmt->execute()):
               return true;
          endif;

     }
     public function Read()
     {
          $sql = "SELECT * FROM anotacoes WHERE user_id = ? ORDER BY data DESC";

          $stmt = Conection::getConn()->prepare($sql);
          $stmt->bindValue(1, $_SESSION['login'][0]);

          $stmt->execute();

          if($stmt->rowCount() > 0):
               $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               return $result;
          else:
               return false;
          endif;
     }

     public function Pesquisa(NotaData $nota){
          $sql = "SELECT * FROM anotacoes WHERE descricao LIKE CONCAT('%',?,'%') and data LIKE CONCAT('%',?,'%') ORDER BY data DESC";

          $stmt = Conection::getConn()->prepare($sql);

          $stmt->bindValue(1, $nota->getDesc());
          $stmt->bindValue(2, $nota->getData());

          $stmt->execute();

          if($stmt->rowCount() > 0):
               $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               return $result;
          else:
               return false;
          endif;
     }

     public function EditaNota(NotaData $n){
          $sql = "SELECT * FROM anotacoes WHERE id = ?";

          $stmt = Conection::getConn()->prepare($sql);

          $stmt->bindValue(1, $n->getId());

          $stmt->execute();

          if($stmt->rowCount() > 0):
               $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               return $result;
          endif;
     }

     public function Update(NotaData $n)
     {
          $sql = "UPDATE anotacoes SET descricao = ? WHERE id = ?";
          
          $stmt = Conection::getConn()->prepare($sql);

          $stmt->bindValue(1, $n->getDesc());
          $stmt->bindValue(2, $n->getId());

          $stmt->execute();

          if($stmt->rowCount() > 0):
               return true;
          else:
               return false;
          endif;
     }
     public function Delete(NotaData $n)
     {
          $sql = "DELETE FROM anotacoes WHERE id = ?";

          $stmt = Conection::getConn()->prepare($sql);

          $stmt->bindValue(1, $n->getId());

          $done = $stmt->execute();

          if($done):
               return true;
          else:
               return false;
          endif;
     }
}