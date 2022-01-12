<?php
  session_start();
  if(isset($_POST['login'])){
    require "connections/dbh.inc.php";
    $email = $_POST['email'];
    $password = $_POST['pass'];
    

    $search = "SELECT * FROM users WHERE email = '".$email."'";
    $result = mysqli_query($con,$search);

    if(!$result){
      echo "error in implementing the command";
    }else{
      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        //checkng the passwords
        $confirmationp = $row['password'];
        if($password == $confirmationp){
          $_SESSION['user_id'] = $row['user_id'];
          header("Location: index.php");
        }else{
          echo "the passwords do not match";
        }
      }else{
        echo " this data apppears no where in databse";
      }
    }
  }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Sign in ♦ Afrolago Rwanda</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />


</head>
<body>



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

<!-- ============================ COMPONENT LOGIN   ================================= -->
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
      <form method="post">
          <div class="form-group">
			 <input name="email" class="form-control" placeholder="Email" type="email" required>
          </div> <!-- form-group// -->
          <div class="form-group">
			<input name="pass" class="form-control" placeholder="Password" type="password" required>
          </div> <!-- form-group// -->
          
          <div class="form-group">
          	<a href="#" class="float-right">Forgot password?</a> 
            <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block" name="login"> Login  </button>
          </div> <!-- form-group// -->    
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4">Don't have account? <a href="page-user-register.php">Sign up</a></p>
     <br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top padding-y">
	<div class="container">
		<p class="float-md-right"> 
			&copy; All Right Reserved. Powered by <span>Lunar Tights Group</span>
		</p>
		<p>
			<a href="#">Terms and conditions</a>
		</p>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->



</body>
</html>


