<?php
$sql = "SELECT id, text, number FROM hello_table";
if ($result = $db->query($sql)) {
while ($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["id"] . "</td><td>" . $row["text"] . "</td><td>". $row["number"] . "</td></tr>";
}
$result->close();
}
echo "</table>";
$db->close();
?>