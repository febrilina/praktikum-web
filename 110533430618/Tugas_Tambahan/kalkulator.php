<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<form action="kode_kalkulator.php" method="post" name="form1">

<input name="angka_1" type="text" value="<?php echo $_GET['b1']; ?>"/>
<select name="operator">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">:</option>
</select>

<input name="angka_2" type="text"  value="<?php echo $_GET['b2']; ?>"/>
<input name="submit" type="submit" value="=" />

<input name="angka_3" type="text"  value="<?php echo $_GET['b3']; ?>"/>
</form>

</body>
</html>
