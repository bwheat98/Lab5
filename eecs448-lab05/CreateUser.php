<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "brandonwheat_ema", "Huu7Ahfo", "brandonwheat_ema");
$userName = $_POST["username"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "INSERT INTO Users (user_id) VALUES ('$userName')";

if($userName != ""){
  if($mysqli->query($query)){
    printf("UserCreated");
  }
}else{
  printf("Error");
}


$mysqli->close();

?>
