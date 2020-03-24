<?php 
  require'includes/dbconnect.php'; 
  $uname = $_REQUEST['uname'];  
  $date = base64_decode($_REQUEST['date']);
  $hash = $_REQUEST['hash'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Stay BeFikar | Secure Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./main_tmp/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./main_tmp/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./main_tmp/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  #vs{
    font-family: "Times New Roman", Times, serif;
    font-size: 30px;
  }
  .sv:hover{

   color: #ff0000;
  }
  </style>
</head>
<body class="hold-transition" background="main_tmp/img/lgbg.jpg">
<center>
<div class="login-box">
  <!-- <div class="login-logo">
    <a href="./main_tmp/index2.html">Home</a>
  </div> -->
  </br></br>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" id="vs">Sign in</p>

      <form action="otp_check.php" method="post">
      <div class="inputBox">            
            <input type="text" name="uname" value="<?php echo $uname; ?>" hidden/>
            <input type="text" name="date" value="<?php echo $date; ?>" hidden/>
            <input type="text" name="hash" value="<?php echo $hash; ?>" hidden/>
          </div>
        <div class="input-group mb-3">
          <input type="text" name="otp" placeholder="1234"  required class="form-control"  autofocus autocomplete="off"/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="col-6">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign In"/>
          </div>
      </form>
      <br/>
      <a href="#" class="sv">
        <span> <i class="fas fa-step-backward"></i>Back To Home</span>
      </a>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</center>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
