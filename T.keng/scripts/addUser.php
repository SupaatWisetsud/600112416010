<?php
require "conn.php";

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$strSQL = "INSERT INTO user VALUES('$id','$password','$name','$email')";
mysqli_query($link,$strSQL) or die(mysqli_error($link));

?>