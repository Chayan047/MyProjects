<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hall Of Fame</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<!---menu--->
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>

</head>
<body>
<div class="header-wrap">
  <div class="logo">
    <h1>Quiz</h1>
	<h2>Kalyani Govt. Engineering College</h2>
  </div>
  <div class="menu"> <img src="images/menu-left.png" alt="image"/>
    	<ul class="sf-menu" id="example">
        <li><a href="index.php">Home</a></li>
         <li><a href="login.php">login</a></li>
        <li> <a href="reg.php">SignUp</a> </li>
        <li class="current"> <a href="rank.php">Ranking</a>
          
        <li> <a href="about.html">About Us</a> </li>
      </ul>
    <img src="images/menu-right.png" alt="image"/> </div>
</div><!---header-wrap--->
<div class="page">
  <div class="panel">
    <div class="title">
      <h1>Hall Of Fame</h1>
      <h2></h2>
    </div>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clouddb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql =("SELECT first_name,last_name,score FROM members ORDER BY score DESC");
$result=$conn->query($sql);
$i=0;
?>

<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;">
<thead>
   <tr>
      <th>Rank</th>
      <th>Frist Name</th>
      <th>Last Name </th>
      <th>Score</th>
    </tr>
 </thead>
<tbody>
<?php
while ($rows1 = mysqli_fetch_assoc($result))
{
	if ($rows1[score]!= NULL)
	{
	?>
	<tr>
	<td><?php echo ++$i ?></td>
	<td><?php echo "$rows1[first_name]" ?></td> 
	<td><?php echo "$rows1[last_name]" ?></td> 
	<td><?php echo "$rows1[score]" ?></td>
	<?php
	}
	else
	{}
}?>
</table>
<?php mysqli_close($conn); // Closing Connection*/ ?> 
</div>
</div>

</body>
</html>




