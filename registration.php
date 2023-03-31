<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#datepicker" ).datepicker();
		} );
	</script>
</head>
<body>
	<h2>Registration Form</h2>
	<form class="registration" method="post" action="http://localhost/php task/index.php">
		<label for="name">Username:</label>
		<input type="text" name="name" id="name"><br><br>
		<label for="birthdate">Birthday date:</label>
		<input type="text" name="birthdate" id="datepicker"><br><br>
		<label for="profilephoto">Profile Photo:</label>
		<input type="file" name="picture"><br><br>
		<label for="phonenumber">Phone number</label>
		<input type="text" name="phonenumber" id="phonenumber"><br><br>
		<button type="button"> Get OTP</button><br><br>
		<label for="OTP">Insert OTP</label>
		<input type="text" name="otp" id="otp"><br><br>
		<button class="success" onclick="regmessage()">Register</button>
		<script>
		function regmessage() {
			var message = ("Please enter your invitation code:");

			window.location.href = "http://localhost/php task/login.php";
			}
	</script>
	</form>
</body>
</html>
