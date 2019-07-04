<?php
//error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
		$_SESSION["eid"] = $_POST["eid"];
		$_SESSION["pwd"] = $_POST["pwd"];
	require 'dbconnect.php';
		//query
		$eid=$_POST['eid'];
		$sql = "SELECT * FROM `login` where eid= '$eid'";
		$result = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($result);
		$eid1=$row['eid'];
		$pwd1=$row['pwd'];
		if (!$result)
			{
			echo "Could not successfully run query ($sql) from DB: " . mysqli_error($mysqli);
			exit;
		}
		//$row = mysqli_fetch_assoc($result);
		 if (mysqli_num_rows($result) == 0) {
    echo "No data found, nothing to print..";
    
}
     $eid = $_POST['eid'];
     $pwd = $_POST['pwd'];
	    if($eid == "$eid1" && $pwd == "$pwd1")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     
         // $_SESSION['eid']=$eid;
		header('Location:http://localhost/Task-Management-master/etm/index.html')  ;     //  On Successful Login redirects to home.php
		print_r($_SESSION);
        }
        else
        {
           echo '<script> alert("Invalid Employee ID or Password");   </script>    '; 
		   //print_r($_SESSION);
        }
}
         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/a.ico">
    <title>Login</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <h1 class="error">Employe Login Form</h1>
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="txt-left-side">
                <h2> Login Here </h2>
                <p>Please enter your employe id and password for ATZ Employe Portal</p>
                <form action="#" method="post">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <!-- <input type="email" name="email" placeholder="Employe Id" required=""> -->
                        <input type="Userid" name="eid" placeholder="Employe Id" required="">
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
                    <!--<div class="btnn">
                        <input type="submit" name="submit"> </input>
					</div>-->
					<div>
                        <input type="submit" class="button123" name="SignIn"VALUE="Sign In"></input>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <!-- <input type="button" value="Sign Up" onclick="parent.location='signup/index.html'"> -->
                        <a href="../signup/index.php"value="Sign Up">Register Here
                        </a>
                    </h3>
                </div>

            </div>
            <div class="img-right-side">
                <h3>Welcome To Atzcart Employe Portal</h3>
                <p>Our Product at your price.</p>
                <img src="images/b11.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <footer class="copyrigh-wthree">
        <p>
            © 2019 AtzE-Portal || All Rights Reserved
            <a href="https://www.atzcart.com"</a>
        </p>
    </footer>
</body>
</html>
