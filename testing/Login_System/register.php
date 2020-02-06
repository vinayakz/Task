<!DOCTYPE html>
	<html>
		<head>
			<title>Register</title>
			<link rel="stylesheet" href="css/style.css">
		</head>
		<body>
			<div class="container">
				<div class="login">
					<h1 class="login-heading">
					<strong>Welcome.</strong> Please Register.</h1>
					<form action="form.php" method="post">
						<input type="text" name="Username" placeholder="Username" required="required" class="input-txt" />
						<input type="password" name="Password" placeholder="Password" required="required" class="input-txt" />
						<input type="email" name="Email" placeholder="Email" required="required" class="input-txt" />
						<input type="text" name="Fullname" placeholder="Fullname" required="required" class="input-txt" />
						<input type="text" name="Mobile" placeholder="mobile" required="required" class="input-txt" />
						<div class="login-footer">

							<button type="submit" class="btn btn--right">Sign up  </button>

						</div>
					</form>
				</div>
			</div>
		</body>
</html>