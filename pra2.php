<table border="1">
<?php
   for($a = 1; $a <= 9; $a++){
       echo '<tr>';
       for($i = 1; $i <= 9; $i++){
        $ans = $a * $i;

        $f1 = '';
        $f2 = '';
        if($ans % 2 === 0){
            $bg = '';
        } else {
            $bg = 'bgcolor="#C0C0C0"';
        }


            if($ans == 18){
                $f1 = '<font color="#ff0000">';
                $f2 = '</font>';
             }  
     echo "<td $bg>" . $f1 . $i . 'x' . $a . '=' . $ans . $f2 . '</td>';
 }
        echo '</tr>';
     }  
?>
</table>

