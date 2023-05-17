<?php
$servername = "servername";
$username = "username";
$password = "pass";
$dbname = "dbname";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
// Set the character set to UTF-8
$conn->set_charset("utf8");
?>