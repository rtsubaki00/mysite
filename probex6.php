<?php
$db = new mysqli('localhost', 'hellouser', 'rpass', 'hellohhelo');
if ($db->connect_error) {
  echo $db->connect_error;
 exit();
} else {
   $db->set_charset("utf8");
}
echo "<table>";


?>

