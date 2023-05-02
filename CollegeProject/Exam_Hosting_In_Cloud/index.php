<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
<div class="clear"></div>
<div class="banner-wrap">
  <div class="banner"> <img src="images/banner1.jpg" alt="banner" /> </div>
</div>
<!---banner--->
<div class="page-wrap">
  <div class="wrap">
    <div class="box marRight40">
      <div class="panel">
        <div class="title">
          <h1>Competition</h1>
          <h2>Michael Jordan</h2>
        </div>
        <div class="content">
          <p>"You have competition every day because you set such high standards for yourself that you have to go out every day and live up to that." </p>
          <div class="button"><a href="#">More</a></div>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="panel">
        <div class="title">
          <h1>Mistakes</h1>
          <h2>John W Holt Jr</h2>
        </div>
        <div class="content">
          <p>"If you're not making mistakes, you're not taking risks, and that means you're not going anywhere. The key is to make mistakes faster than the competition, so you have more changes to learn and win."</p>
          <div class="button"><a href="#">More</a></div>
        </div>
      </div>
    </div>
    <div class="box marRight40">
      <div class="panel">
        <div class="title">
          <h1>Failure</h1>
          <h2>Morihei Ueshiba</h2>
        </div>
        <div class="content">
          <p>"Failure is the key to success; each mistake teaches us something."</p>
          <div class="button"><a href="#">More</a></div>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="panel">
        <div class="title">
          <h1>Success</h1>
          <h2>Winston Churchill</h2>
        </div>
        <div class="content">
          <p>"Success is not final, failure is not fatal: it is the courage to continue that counts." </p>
          <div class="button"><a href="#">More</a></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!---wrap-end--->
  

<div class="clear"></div>
<div class="copyright-wrap">
  <div class="copyright">
    <div class="content">
	<div align="center">
      <p>© 2016 All Rights Reserved  | <a href="#" class="link">Privacy Policy</a>&nbsp;&nbsp;
         <a href="about.html"> About Us</a>&nbsp;&nbsp;
        <a href="#" class="link"> Contact Us</a></p>
    </div>
	</div>
  </div>
</div>
</body>
</html>
