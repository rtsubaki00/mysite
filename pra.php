<table border="1">
<?php
   for($a = 1; $a <= 9; $a ++){
       echo '<tr>';
       for($i = 1; $i <= 9; $i ++){
           $ans = $a * $i;
           echo '<td>'. $a. 'x'. $i. '='. $ans. '</td>';
       }
       echo '</tr>';
   }
?>
</table>