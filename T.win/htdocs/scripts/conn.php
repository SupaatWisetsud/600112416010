<?php
$host = "db";
$user = "root";
$pass = "1234";
$db = "webdb";

$link = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($link));
mysqli_query($link,"SET NAMES utf8");

var_dump($link);