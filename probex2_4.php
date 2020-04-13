<?php
$year = 2020;
if(date('L', mktime(0,0,0,1,1,$year))){
    echo "閏年です。";
}
?>