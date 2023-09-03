<?php
echo 'my sql query <br />';
// ways to connect to database
// 1. mysqli extension
//      2 ways: a. procedural way, b. object oriented way
// 2. pdo (php data objects)
// connecting to a database
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br />>");
} else {
    echo "connected to database <br/>";
}
?>