<?php

require_once("inite.php");
$name = "masud";
$password = 123456;
$contract = "01793914064";
$country = "Bangladesh";

$sql_query = "SELECT name FROM users WHERE name LIKE '$name' AND password LIKE '$password'";

$result = mysqli_query($connection, $sql_query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    echo "$name";
} else {
    echo "error";
}

?>
