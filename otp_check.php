<?php 
    session_start();
    require'includes/dbconnect.php';
    $uname = $_POST['uname'];
    $otp = $_POST['otp'];
    $date = $_POST['date'];
    $hash = $_POST['hash'];

    $otp = mysqli_query($con,"select * from otp where username='$uname' and otp='$otp' and status='unread' and date='$date' and hash='$hash' ");
    $row = mysqli_fetch_array($otp);
    if($row>0){
        mysqli_query($con,"update otp set status='read' where username='$uname' ");
        header("Location:admin/home.php");
    }else{
        echo "<script>alert('Invalid OTP.');<\script>";
        header("Location: otp_verify.php?uname=$uname&hash=$hash&date=$date");
    }

    
?>