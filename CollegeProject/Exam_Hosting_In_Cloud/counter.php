<!doctype html>
<html>
<head>
<title>PHP Countdown Timer</title>

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
</style>
</head>
<body>
<h2>


<!--echo "The time is " . date("r");?></h2></br>
<iframe src="http://free.timeanddate.com/clock/i56khc2k/n54/tlin/tt0" frameborder="0" width="274" height="18"></iframe>-->
<script>

function goNewWin() {

//***Get what is below onto one line***

window.open('test.html','TheNewpop','toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1'); 

//***Get what is above onto one line*** 

self.close()

}

function gologin()
{

/*<?php
session_start(); // Starting Session
$value=$_SESSION["login_user"];
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clouddb";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = ("INSERT INTO members score values 0");
$conn->query($sql);
?>*/
     window.location="index.php";
     session_destroy();
}
</script>

<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x = new Date()
document.getElementById('ct').innerHTML = x;
tt=display_c();
}
</script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>

<?php
/*date_default_timezone_set("Asia/Kolkata");
$date = strtotime("May 5, 2016 1:00 PM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minute_remaining=floor($remaining % 86400 % 3600/60);
$seconds_remaining=floor($remaining %86400 % 3600 % 60);

 
<h1>There are <span class="green"> <?php echo $days_remaining?></span> days and <span class="green"> <?php echo $hours_remaining?></span> hours <?php echo $minute_remaining?> minutes <?php echo $seconds_remaining?> seconds left</h1> 
*/
?>
<fieldset>
<header>
Instructions
</header>
<h3><i>
1)Please read the instructions carefully before answering the questions.<br/ >
2)There are 20 questions in the exam that need to be completed in 10 minutes.<br/ >
3)Each question carries 1 mark and there is NO NEGATIVE MARKING.<br/ >
4)Press SUBMIT at the end of the exam to exit.<br/ >
4)Start your test by clicking the Start Test button.<br />
</i></h2>
 
<div position="center" color:red>  best of luck
</div>
</fieldset>
<div class="button" onclick="goNewWin(); gologin();" >Start Quiz</div>

</body>
</html>
