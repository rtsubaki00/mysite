<?php
session_start();
$name = $_POST['name'];
$_SESSION['name'] = $_POST['name'];
print ("入力した値は $name です。");

?>