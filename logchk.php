<?php
session_start();
require'includes/dbconnect.php';
if(isset($_POST['lgn']))
{
   $un=$_POST['uname']; 
   $ps=base64_encode($_POST['pass']);
   $rs=mysqli_query($con,"select * from lgn_db where username='$un' and password='$ps' and u_status='active'");
   if($rw=mysqli_fetch_array($rs))
   {
     $utp=$rw['u_type'];
	 $_SESSION["uname"]=$un;
	 if($utp=='aDmn')
	 {
	 header("Location:send_otp.php?otpname=<?php echo $un; ?>");
	 }
	 else if($utp=='vndr')
	 {
	 header("Location:vendor/home.php");
	 }
   }
   else
   {
     echo'<script>alert("Invalid Username or Password");document.location="login.php";</script>';
   }
}
else
{
echo'<script>history.back();</script>';
}
?>