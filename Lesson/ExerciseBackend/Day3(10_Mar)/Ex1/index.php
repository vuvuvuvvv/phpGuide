<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<title>Exercise 1</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<script src="js/bootstrap.bundle.js"></script>
	</head>
	<body>
		<?php
			$usernameErr = $passwordErr = "";
			$username = $password = "";
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if(empty($_POST["username"])){
					$usernameErr = "*Cannot be empty!";
				} else {
					$username = test_input($_POST["username"]);
				}
				if(empty($_POST["password"])){
					$passwordErr = "*Cannot be empty!";
				} else {
					$password = test_input($_POST["password"]);
				}
			}
			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<div class="container">
			<div class="shadow p-3 mb-5 bg-body rounded-3">
				<h1 class="bg-success p-3 rounded-3 text-center">Sign in</h1>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
					<span class="text-danger"><?php echo $usernameErr ?></span>
					<input type="text" class="form-control mb-3 p-2" name="username" placeholder="Username">
					<span class="text-danger"><?php echo $usernameErr ?></span>
					<input type="password" class="form-control mb-3 p-2" name="password" placeholder="Password">
					<button type="submit" class="btn btn-success col-12 p-2">Login</button>
				</form>
			</div>
			<?php
				$notify;
				if($username == "admin" && $password == "admin"){
					$notify = "<p class='text-success'>Your username: ".$username."</p>";
				} else {
					$notify = "<span class='text-danger'>Your information is wrong!";
				}
				echo $notify;
			?>
		</div>
	</body>
</html>