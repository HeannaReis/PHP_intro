<?php

namespace App\Model;

class Conection {
     private static $instance;

     public static function getConn(){
          if(!isset(self::$instance)):
               self::$instance = new \PDO('mysql:host=localhost;dbname=anotasys;charset=utf8','root', 'admin');
          endif;
          return self::$instance;
     }
}