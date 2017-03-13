<?php 
session_start();
include('../config.php');

if(isset($_GET['submit']))
{
	
	$uemail = $_GET['uname'];
	$Upass = $_GET['psw'];
	
	$query = "select * from admins where email = '".$uemail."' AND pass = '".$Upass."';";
	

	
	if(($result = mysqli_query($conn,$query)) == true && mysqli_num_rows($result) == 1)
	{
		while($row = mysqli_fetch_array($result))
		{
			if($uemail == $row[2] && $Upass == $row[3]) 
			{
				$_SESSION['user'] = $row[0];
				echo '<script>  window.location.assign("../Admin/AdminIndex.php");</script>';	
			}	
			
		}
	}
	else
	{
		echo '<script>alert("Invalid Username/Password")</script>';	
	}
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="uname" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="psw" required />
              </div>
              <div>
              <input type="submit" name="submit" class="btn btn-primary" value="Login"/>
              <!--  <a class="btn btn-default submit" href="login.php">Log in</a> -->
                <a class="reset_pass" href="signup.php">Sign Up?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
   

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-book"></i>Majalis-e-Noor</h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
