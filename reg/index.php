<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <style type="text/css">

		  	body{
		  			padding-top: 10px;
		  			padding-bottom: 50px;
		  			
					font:600 16px/18px 'Open Sans',sans-serif;
				}
				#submit{
					background:orange;
					color:#fff;
					border: none;
					padding:20px;
					border-radius: 25px;
					width:200px;
					height: 10px;
					font-style:600 16px/18px  'Open Sans', sans-serif;



				}
				.form{
					padding-bottom: : 10px;
					padding: 20px;
					border-radius:15px;
					/*background-color: #ffffff;*/
					width: 30%;
					height: 50%;
				}

				

				/*td {
					padding-top: 10px;
				}	

				input {
					border-radius: 10px;
					width: 200px;
					height: 20px;
					padding: 5px;
					border: none;
					border-color: black;
				}
				#reg{
					background-color:#b1eff7;
					width: 500px;
					border-radius: 10px;

				}
			*/
		
		  </style>
	</head>
	<body>
		<center>
		<div class="container">
			<form id="reg" action="form.php" method="POST">
				
					<table>
						<tr>
							<td>
								<label>Username</label>
								
							</td>
							<td>
								<input type="text" id="uname" name="Username" placeholder="UserName" class="input" required >
							</td>
						</tr>

						<tr>
							<td>
								<label>Password</label>
							</td>
							<td>
								<input type="password" id="psswd" name="Password" placeholder="Password" class="input" required>
							</td>
						</tr>

						<tr>
							<td>
								<label>Email</label>
							</td>
							<td>
								<input type="text" id="mail" name="Email" placeholder="Email ID" class="input" required>
							</td>
						</tr>

						<tr>
							<td>
								<label>FullName</label>
							</td>
							<td>
								<input type="text" id="fname" name="Fullname" placeholder="Full name" class="input" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Moblie No</label>
							</td>
							<td>
								<input type="text" id="mobnum" name="Mobile" placeholder="Mobile number" class="input" required>
							</td>
						</tr>
						<tr >
							<td colspan="2" style="text-align: center;">
							
								<input  type="submit" id="submit" name="register" class="button" value="send" >
														
							</td>
						</tr>
					</table>
														
			</form>
		</div>	
		</center>
	</body>
</html>




	