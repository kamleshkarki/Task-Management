<?php
session_start();
require 'dbconnect.php';		
$message="";
if(!empty($_POST["login"]))
{
	$result = mysqli_query($conn,"SELECT * FROM login WHERE eid='" . $_POST["eid"] . "' and pwd = '". $_POST["pwd"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["eid"] = $row['eid'];
	} else {
	$message = "Invalid Employee ID or Password!";
	}
}
	if(isset($_POST['signup']))
		{		
		$eid=$_POST["eid"];
		$ename=$_POST["ename"];		
		$mob=$_POST["mob"];
		$uname=$_POST["uname"];
		$pwd=$_POST["pwd"];							
			 $query = "INSERT INTO `login`(`eid`,`ename`,`mob`,`uname`,`pwd`)
				VALUES
				('$eid','$ename','$mob','$uname','$pwd') ";
			$result = mysqli_query($mysqli, $query);
			if ( false===$result ) {
			  printf("error: %s\n", mysqli_error($mysqli));
			}
			else {
				echo "<script language='javascript'>";
				echo "alert('User Registered Successfully..!')";
				echo "</script>";							
			}
				mysqli_close($mysqli);
			}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/a.ico">
    <title>Gadget Sign Up Form a Flat Responsive Widget Template :: w3layouts </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gadget Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<style>
.button123 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 100px;
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
    <h1 class="error">Atz Employee Singup From</h1>
	<!---728x90--->
    <div class="w3layouts-two-grids">
	<!---728x90--->
        <div class="mid-class">
            <div class="img-right-side">
                <h3>Manage Your Account</h3>
                <p>ATZ Cart Pvt Ltd is an e- commerce online bulk ordering marketplace, designed to bring sellers and buyers together,closer than in real life,to solve their B2B and B2C requirements.</p>
                <a href="https://www.atzcart.com/about_us"value="Sign Up">Read more</a>
                <img src="images/b11.png" class="img-fluid" alt="">    
                
            </div>
            <div class="txt-left-side">
                <h2> Sign Up Here </h2>
                <form action="index.php" method="POST">
                    
					<div class="form-left-to-w3l">
                       <span class="fa fa-id-badge" aria-hidden="true"></span>
                       <input type="text" name="eid" placeholder="Employee ID" required="">
                       <div class="clear"></div>
                   </div>
					
					<div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" name="ename" placeholder=" Name" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="mob" placeholder="Phone" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="uname" placeholder="Email" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="pwd" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="main-two-w3ls">
                        <div class="left-side-forget">
                            <input type="checkbox" class="checked">
                            <span class="remenber-me">Remember me </span>
                        </div>
                        <div class="right-side-forget">
                            <a href="#" class="for">Forgot password...?</a>
                        </div>
                    </div>
                  	<div>
                        <input type="submit" class="button123" name="Sign Up"VALUE="Sign Up"></input>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Team atzcart
                        <a href="../login/index.php">Login Here
                        </a>
                    </h3>
                </div>
                

                <div class="clear"></div>
            </div>
        </div>
    </div>
	<!---728x90--->
    <footer class="copyrigh-wthree">
        <p>
            © 2019 Team atzcart || Atzcart
            <a href="https://www.atzcart.com" target="_blank">Atzcart</a>
        </p>
    </footer>
</body>
</html>
