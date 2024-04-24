<?php
/* Local Database*/

$servername = "localhost";
$username = "myphpuser";
$password = "myDbadj5467765FGHD@#!";
$dbname = "myphpdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 