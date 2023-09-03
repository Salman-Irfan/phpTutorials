<?php
echo 'create db <br />';
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br />>");
} else {
    echo "connected to database <br/>";
}
// create db
$sql = "CREATE DATABASE dbSalman1";
$result = mysqli_query($conn, $sql);
if($result){
    echo "database created <br/>";
}else{
    echo "database not created because of this error: <br/>" . mysqli_error($conn);
}
?>