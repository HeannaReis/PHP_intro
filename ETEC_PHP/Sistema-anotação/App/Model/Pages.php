<?php

namespace App\Model;

class Pages {
     private $pages;

     public function __construct($pages){
          $this->pages = $pages;
     }

     public function setPages($p){
          $this->pages = $p;
     }

     public function getPages(){
          return $this->pages;
     }

     public function IncludePage(){
          if($this->pages != '' or $this->pages != null):
               return 'Pages/'.$this->pages.'.php';
          else:
               return 'Pages/Login.php';
          endif;
     }
}