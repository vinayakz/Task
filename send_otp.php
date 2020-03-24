<?php 
    require'includes/dbconnect.php';
    session_start();
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1';

    $uname =$_REQUEST['otpname'];  
    $un = base64_encode($uname);
    $query = mysqli_query($conn,"select * from lgn_db where username='$uname' ");
    $row = mysqli_fetch_array($query);    
    $email = $row['username'];
    $hash = base64_encode(md5(rand()));
    $otp = rand(1000,9999);
    //Set the Indian Timezone
    date_default_timezone_set('Asia/Kolkata');
    //Get the current time in 24 hr format
    $date = date('d/m/Y H:i:s', time());
    $hashvalue = base64_encode($date);    
    $sub = "D-Ads Admin Login OTP";        
    $msg = "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    <title>CSS Website Layout</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
    * {
    box-sizing: border-box;
    }

    body {
    margin: 0;
    }

    p {
    font-family: 'Times New Roman', Times, serif;
    font-size: 1em;  
    color: black;
    }

    .footer {
    margin: 0px;
    padding: 0px;
    color: #888888;
    font-family: 'Times New Roman', Times, serif;
    
    
    }

    /* Create three equal columns that floats next to each other */
    .column1 {
    float: left;
    width: 20%;
    padding: 15px;  
    margin-top: 15px;
    }

    .column2 {
        float: left;
        width: 60%;
        padding: 15px;  
        margin-top: 15px;
    }
    .column3 {
        float: left;
        width: 20%;
        padding: 15px;  
        margin-top: 15px;
    }      

    .maincol {
    background: #fafafa;
    box-shadow: 1px 2px 10px 1px #888888;
    }

    /* Clear floats after the columns */
    .row:after {
    content: \"\";
    display: table;
    clear: both;
    }

    .header {
    font-style: normal;
    font-size: medium;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    hr {
    color: #fafafa;
    }
    span {
    font-family: Georgia, 'Times New Roman', Times, serif;  
    font-size: 2.7em;

    }


    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
    }
    </style>
    </head>
    <body>

    <div class=\"row\">
    <div class=\"column1\">
    </div>
    
    <div class=\"column2 maincol\">
        <div class=\"header\">
        <span style=\"color: #f3c500;\">Stay-</span><span style=\"color: #01a185;\">Befikar</span>
        </div>
        <hr>
        <div class=\"otp\">

        <h3>Requested OTP</h3>
        <p>Dear User,</p>
        <p> Your One Time Password (OTP) is $otp. <br> The password will expire in ten minutes if not used. <br> If you have not made this request, please contact our customer support immediately.</p>
        <br>
        <br>
        <br>
        Thank You,<br>
        D-Ads Solution Pvt. Ltd.
        <br><br><br>
    </div>
    <hr>
        <div class=\"footer\">
        Never Share your Card number, CVV, PIN, OTP, or Passcode with anyone, even if the caller claims to be a bank employee. Sharing these details can lead to unauthorised access to your account. <br>
        This is an automatically generated email, please do not reply.
        </div>
    </div>
    
    <div class=\"column3\">    
    </div>
    </div>
    </body>
    </html>";
    $rec = "$email";    
    // mail($rec,$sub,$msg_tmp);
    if(mail($rec,$sub,$msg,$headers)){
        $query = mysqli_query($con,"insert into otp values(null,'$uname','$otp','unread','$date','$hash')");        
        header("Location: otp_verify.php?uname=$un&hash=$hash&date=$hashvalue");
    }else{
        echo error_log();
    }
    
?>