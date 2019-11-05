<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "brandonwheat_ema", "Huu7Ahfo", "brandonwheat_ema");
$userName = $_POST["username"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$q1 = "SELECT * FROM Users";

$result = $mysqli->query($q1);
if ($result->num_rows > 0) {
    // output data of each row
    echo "USER ID'S:<br>";
    while($row = $result->fetch_assoc()) {
       echo "". $row['user_id']."<br>";
    }
} else {
    echo "No users";
}



$mysqli->close();

?>
