<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
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
      <h1>Sign Up</h1>
      <h2>New User!! Sign Up here with valid Information...</h2>
    </div>
        <form method="post" action="registration.php">
            <center>
            <table border="1" width="30%" cellpadding="5">
                <thead>
                    <tr>
                        <th colspan="2">Enter Information Here</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="first_name" value="" /></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="last_name" value="" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="" /></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="uname" value="" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit" /></td>
                        <td><input type="reset" value="Reset" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">Already registered!! <a href="index.php">Login Here</a></td>
                    </tr>
                </tbody>
            </table>
            </center>
        </form>
  </div>
</div>

</body>
</html>
