<?php

namespace App\Model;

class NotaData {
     private $id, $desc, $data, $id_user;

     // public function __construct($desc, $data, $id_user) {
     //      $this->desc = $desc;
     //      $this->data = $data;
     //      $this->id_user = $id_user;
     // }

     public function setId($id){
          $this->id = $id;
     }

     public function getId(){
          return $this->id;
     }

     public function setDesc($desc){
          $this->desc = $desc;
     }

     public function getDesc(){
          return $this->desc;
     }
     
     public function setData($data){
          $this->data = $data;
     }

     public function getData(){
          return $this->data;
     }
     public function setIdUser($id_user){
          $this->id_user = $id_user;
     }

     public function getIdUser(){
          return $this->id_user;
     }

}