<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "brandonwheat_ema", "Huu7Ahfo", "brandonwheat_ema");
$userName = $_POST["user"];
$query = "SELECT content FROM Posts WHERE author_id = '$userName'";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()){
  echo "POST BY $userName: ".$row['content'] . "<br><br>";
}

$mysqli->close();
?>
