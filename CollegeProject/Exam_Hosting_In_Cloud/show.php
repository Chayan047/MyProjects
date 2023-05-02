<script type="text/javascript">setTimeout("window.close();", 3000);</script>
<?php
session_start(); // Starting Session
$value=$_SESSION["login_user"];
$value1=$_POST['myfield'];
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clouddb";
echo"Thank You For Your Participation. Your Score is: $value1 ";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = ("UPDATE members SET score='$value1' WHERE uname='$value'");
$conn->query($sql);

?>

