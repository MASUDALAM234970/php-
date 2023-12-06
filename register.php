<?php

require_once("inite.php");
$u_name = isset($_POST["name"]) ? $_POST["name"] : "";
$u_password = isset($_POST["password"]) ? $_POST["password"] : "";
$u_contract = isset($_POST["contract"]) ? $_POST["contract"] : ""; 
$u_country = isset($_POST["country"]) ? $_POST["country"] : "";
$u_age = isset($_POST["age"]) ? $_POST["age"] : "";

$sql_query = "INSERT INTO users VALUES ('$u_name', '$u_password', '$u_contract', '$u_country','$u_age')";

if (mysqli_query($connection, $sql_query)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . mysqli_error($connection);
}

?>
