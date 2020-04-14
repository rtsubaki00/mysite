<?php
class Month {
    public $month;

    function showDate(){
        echo "５か月後の月は".date("m", strtotime($this -> month. "+5 month"))."月です。";
    }
}


$date = new Month;
$date -> month = "2020-04-14";

$date -> showDate();
?>