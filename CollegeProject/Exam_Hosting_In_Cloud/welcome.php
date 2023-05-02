<html>
<head><title>Welcome To KGEC QUIZ
</title>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
#welcome{
	height:400px;
	position:400px;
}
#logo{
	height: 200px;
	position:50%;
}
</style>
</head>
<body>
<img src="images/KgecLogo.png" id="logo" alt="kgec logo"><br/ >

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
echo "Hello $rows1[first_name] &nbsp;$rows1[last_name]!! Welcome To KGEC Quiz Portal...";
mysqli_close($conn); // Closing Connection
?> 

<p></P>
<div class="button" onclick="location.href='counter.php';">Proceed To Quiz</div>
<div class="button" onclick="location.href='info.php';">Your Info</div>

</body>
<html>
