<?php

$a = fopen("testdata.csv", "a");
@fwrite($a, "Thank you");
fclose($a);
 
?>

