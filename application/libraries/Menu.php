<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
        class Menu{
            public $arreglomenu;
                public function construct($arreglo){  
                    
                    $this->arreglomenu=$arreglo;                    
                }
            
            
           public function construirMenu($arreglo){
               $this->arreglomenu=$arreglo; 
               $ret_menu = "<nav><ul class='nav navbar'>";
                   
               foreach($this->arreglomenu as $opcion){
                   $ret_menu .= "<li>"  .$opcion. "</li>";
               }
               $ret_menu  .= "</ul></nav>";
               return $ret_menu;
               
           }
        }

?>