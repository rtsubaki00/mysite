<?php
 class Month {
     function set_name($name) {
       $this->name = $name;
     }
     function get_name() {
       return date("m", strtotime("+5 month"));;  
     }
   }

   $month = new Month();
   $month-> get_name ('2020-04-22');
   
   echo $month -> get_name();

   
   
   
 ?>

    
