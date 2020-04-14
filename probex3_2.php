<?php
class Month {
    public static $val = "2020-04-14";
}


$value = Month::$val;
echo "５か月後の月は".date("m", strtotime($value. "+5 month"))."月です。";
?>
