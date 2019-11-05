<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "brandonwheat_ema", "Huu7Ahfo", "brandonwheat_ema");
$checkBox = $_POST["deleted"];
foreach ($checkBox as $deleted)
{
  $query = "DELETE FROM Posts WHERE post_id = '$deleted'";
  $result = $mysqli->query($query);
  if($result){
    printf("Post Deleted!");
  }else{
    printf("Error!");
  }
}



$mysqli->close();
?>
