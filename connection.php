<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "food_ordering_system";

$link = new mysqli($host, $user, $pass, $db);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>
