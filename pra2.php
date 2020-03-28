<table border="1">
<?php
   for($a = 1; $a <= 9; $a++){
       echo '<tr>';
       for($i = 1; $i <= 9; $i++){
           $ans = $a * $i;
           if($i % 2 === 0){
               echo '<td>'.$i.'x'.$a.'='.$ans.'</td>';
           } else {
               echo '<td bgcolor="#C0C0C0">'.$i.'x'.$a.'='.$ans.'</td>';
           } 
       }
       echo '</tr>';
   }
?>
</table>