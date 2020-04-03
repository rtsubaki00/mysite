<?php
session_start();
$name = $_SESSION['name'];
print ("入力した値は $name です。");


?>