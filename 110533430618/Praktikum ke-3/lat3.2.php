<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
 <title>Prefil Data Radio Button</title>
</head>

<body>

 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
  Jenis Kelamin
  <input type="radio" name="sex" value="Pria" checked
 
 <?php
 if($_POST['sex'] == 'Wanita') {
	echo 'checked="checked"';
 }
 ?>
 />Wanita <br />

<input type="submit" value="ok" />
</form>

<?php
if (isset($_POST['sex'])) {
	echo $_POST['sex'];
}
?>

</body>
</html>