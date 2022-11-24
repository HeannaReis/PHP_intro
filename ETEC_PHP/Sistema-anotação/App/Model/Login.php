<?php

namespace App\Model;

class Login
{
     public function Create(LoginData $n)
     {
          $insert = "INSERT INTO user (login, pass, name_user) VALUES (?, ?, ?)";

          $stmt = Conection::getConn()->prepare($insert);

          $stmt->bindValue(1, $n->getLogin());
          $stmt->bindValue(2, $n->getPass());
          $stmt->bindValue(3, $n->getUser());

          $stmt->execute();

          if ($stmt->rowCount() > 0):
               return true;
          else:
               return false;
          endif;
     }

     public function Read(LoginData $l)
     {
          $sql = "SELECT * FROM user WHERE login = ?";
          $stmt = Conection::getConn()->prepare($sql);

          $stmt->bindValue(1, $l->getLogin());

          $stmt->execute();

          if($stmt->rowCount() > 0) {
               $pass = "SELECT * FROM user WHERE login = ? and pass = ?";
               $stmt = Conection::getConn()->prepare($pass);
               $stmt->bindValue(1, $l->getLogin());
               $stmt->bindValue(2, $l->getPass());
               $stmt->execute();
               switch($stmt->rowCount()) {
                    case 1:
                         return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                    default:
                         return false;
               }
          }else{
               return false;
          }

     }

     public function Update(){

     }

     public function Delete(){}
}