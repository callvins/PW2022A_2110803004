<?php
if (isset($_POST["submit"])) {
	if ($_POST["username"] == "Kalvin" && $_POST["password"] == "123#") {
		header("Location: admin.php");
		exit;
	} else {
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body style="text-align: center; background-color: #3b5998;">
	<h1 style="color: white;">Login Admin</h1>
	<div class="kotak" style="width: 300px; height:200px; padding-top:20px; background-color:white; margin:auto; border: 2px solid black; box-shadow: 10px 0px 10px rgba(0,0,0,0.4); ">
		<form action="" method="post">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" autocomplete="off" style="border-radius: 10px;">
			<br><br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" style="border-radius: 10px;">
			<?php if (isset($error)) : ?>
				<p style="color: red; font-style: italic; font-size:18px;">Username atau Password Salah!!</p>
			<?php endif; ?>
			<br><br>
			<button type="submit" name="submit" style="background-color: lightblue; width: 245px; border-radius: 10px;">Login</button>
		</form>
	</div>
</body>
</html>