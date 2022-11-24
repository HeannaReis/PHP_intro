<?php

namespace App\Model;

class LoginData {
     private $login, $pass, $user;

     // public function __construct($login, $pass) {
     //      $this->setLogin($login);
     //      $this->setPass($pass);
     // }

     public function setUser($user) {
          $this->user = $user;
     }

     public function getUser() {
          return $this->user;
     }

     public function setLogin($login){
          $this->login = $login;
     }

     public function getLogin(){
          return $this->login;
     }

     public function setPass($pass){
          $this->pass = $pass;
     }

     public function getPass(){
          return $this->pass;
     }
}