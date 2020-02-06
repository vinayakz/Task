<?php
	session_start();
	if (isset($_SESSION['mylogin'])) {
		header("Location: portfolio.php");	
	}else {
	?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Simple login form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  


      <link rel="stylesheet" href="css/style.css">
      

  
</head>

<body>
  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
            Not registered yet?
             <a href="register.php" class="lnk"> Create One</a>

            <button type="submit" class="btn btn--right">Sign in  </button>
    
          </div>
      </form>
  </div>
</div>
  <!-- <script type="text/javascript">
            alert("Page is restricted. Please login to continue.");
            window.location.href="index.php";
        </script> -->
    

</body>
</html>
<?php } ?>
