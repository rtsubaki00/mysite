<?php
 class Month {
   
     private $name;

     function set_name($name) {
       $this->name = $name;
     }
     function get_name() {
       return date("m", strtotime("+5 month"));;  
     }
   }

 

   
   
   
 ?>

    
