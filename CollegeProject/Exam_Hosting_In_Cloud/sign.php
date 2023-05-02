<?php
session_start(); // Starting Session
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clouddb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if (isset($_POST['submit'])) 
	{
	if (empty($_POST['uname']) || empty($_POST['pass'])) 
		{
			echo "Username or Password is invalid";
		}
	else
		{

	$username=$_POST['uname'];
	$password=$_POST['pass'];

/*$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);*/

	$sql = ("select * from members where uname='$username'AND pass='$password'");
	$query=$conn->query($sql);
	$rows = mysqli_num_rows($query);
	//for usename and password validation	
	$sql1 = ("select score from members where uname='$username'");
	$query1=$conn->query($sql1);
	$rows1 = mysqli_fetch_row($query1);
	//user cant give a 2nd test
	//echo "$rows";
	//print_r ($rows1);
	;
if ($rows1[0]!= NULL)
	{echo "You Have Appeared In The TEST Once.     ";
	 echo "Your Score In The Previous Test Was $rows1[0]";
	 header('Refresh: 5;url=login.php'); }
else
	{if ($rows ) 
		{
		$_SESSION['login_user']=$username;
		header("location: welcome.php"); 
		}
	 

	else	{
		echo "Username or Password is invalid";
		}
	}

	mysqli_close($conn); // Closing Connection
		}
	}


?>
