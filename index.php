<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Welcome to your favourite great american</h1>

	<button class="buttoninvite" onclick="inviteCode()">Connect to your favourite great american</button>

	<script>
		function inviteCode() {
			var message = prompt("Please enter your invitation code:");

			if (message != null) {
				window.location.href = "http://localhost/php task/login.php";
			}
		}
	</script>

	<p>Dont have an account?</p>
	<a href="http://localhost/php task/registration.php"><button>Register</button></a>
	</div>
</body>
</html>