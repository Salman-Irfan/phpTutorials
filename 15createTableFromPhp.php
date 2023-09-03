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
// create table from php script d
$sql = "CREATE TABLE `phpTrip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "table created sucessfullyc <br/>";
} else {
    echo "table not created because of this error: <br/>" . mysqli_error($conn);
}
?>