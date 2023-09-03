<?php
echo 'create table from php <br />';
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbSalman";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br />>");
} else {
    echo "connected to database <br/>";
}
// insert values in table from php script
$name = "uzair";
$dest = "pak";
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$dest');";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "values added sucessfully in table <br/>";
} else {
    echo "values not added sucessfully in table because of this error: <br/>" . mysqli_error($conn);
}
?>