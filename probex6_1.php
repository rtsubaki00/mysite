<?php
$db = new mysqli('localhost', 'hellouser', 'rpass', 'hellohhelo');
if ($db->connect_error) {
  echo $db->connect_error;
 exit();
} else {
   $db->set_charset("utf8");
}
echo "<table>";

// probex6_2ではここから先を変えるだけっぽいので、ここで切りして別ファイルに置く
$sql = "SELECT id, text, number FROM hello_table";
if ($result = $db->query($sql)) {
while ($row = $result->fetch_assoc()){
// テーブルの作成法
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["text"] . "</td><td>". $row["number"] . "</td></tr>";
}
$result->close();
}
echo "</table>";
$db->close();
?>