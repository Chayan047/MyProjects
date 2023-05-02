<?php
session_start(); // Starting Session
$value=$_SESSION["login_user"];
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clouddb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1 = ("select * from members where uname='$value'");
$result=$conn->query($sql1);
$rows1 = mysqli_fetch_assoc($result);
echo "First Name: $rows1[first_name]<br>Last Name: $rows1[last_name]<br>Email: $rows1[email]<br>Username: $rows1[uname]<br>Password: $rows1[pass]<br>Score: $rows1[score]<br>";
mysqli_close($conn); // Closing Connection
?> 
