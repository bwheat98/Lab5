<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "brandonwheat_ema", "Huu7Ahfo", "brandonwheat_ema");
$userName = $_POST["username"];
$post = $_POST["post"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$lastId=0;
$q1 = "SELECT user_id FROM Users";
$q2 = "SELECT COUNT(*) FROM Posts";
$result = $mysqli->query($q1);
$isUser = false;

$result2 = $mysqli->query($q2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
          $lastId = $row["COUNT(*)"];

    }
} else {
    $lastId = 0;
}

$query = "INSERT INTO Posts (post_id,content, author_id) VALUES ('$lastId','$post', '$userName')";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["user_id"] == $userName){
          $isUser = true;
        }
    }
} else {
    echo "0 results";
}

if($post != "" && $isUser==true){
  if($mysqli->query($query)){
    printf("Post posted");
  }else{
    printf("Error!");
  }
}else{
  printf("Error");
}


$mysqli->close();

?>
