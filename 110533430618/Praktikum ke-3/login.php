
<?php
session_start();
if (!$_SESSION['username'] && !$_SESSION['password']) {
?>

<html>
	<head> <title> Login Area </title> </head>
<body>
	<h1>Login Area</h1>
	<form action="proses_login.php" method=""POST>
	Username <br />
	<input type="text" name="username" /> <br /> <br />
	Password <br />
	<input type="password" name="password" /> <br /> <br />
	<input type="submit" value="Login" />
	<p> Belum punya akun? <a href="daftar.php"> Daftar sekarang </a>.</p>
	</form>
</body>
</html>

<?php
}else {
	header("location:index.php");
}
?>
