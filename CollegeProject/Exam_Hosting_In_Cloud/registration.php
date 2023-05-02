<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clouddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$username=$_POST['uname'];
$password=$_POST['pass'];
$sql = ("INSERT INTO members(first_name, last_name, email, uname, pass)VALUES('$fname', '$lname', '$email', '$username', '$password')");
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: index.php");
mysql_close($conn);
?>
