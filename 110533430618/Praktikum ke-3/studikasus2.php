<!DOCTYPE html>
<html>
<head><title>Preseleksi Data Seleksi</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post">
Data Asal Mahasiswa <br />

<input type="checkbox" name="asal[]" value="Malang" 
<?php 
if (isset($_POST['asal'])) {
	foreach ($_POST['asal'] as $key => $val) {	
	if($val=="Malang")	
	echo 'checked';	
	} 
}
?> 
/>Malang <br />

<input type="checkbox" name="asal[]" value="Surabaya"
<?php 
if (isset($_POST['asal'])) {
	foreach ($_POST['asal'] as $key => $val) {	
	if($val=="Surabaya")	
	echo 'checked';	
	} 
}
?> 
/>Surabaya <br />

<input type="checkbox" name="asal[]" value="Medan"
<?php 
if (isset($_POST['asal'])) {
	foreach ($_POST['asal'] as $key => $val) {	
	if($val=="Medan")	
	echo 'checked';	
	} 
}
?> 
/>Medan <br />

<input type="submit" value="ok" /> 
</form> 
<?php 
if (isset($_POST['asal'])) { 
foreach ($_POST['asal'] as $key => $val) { 
echo $key . ' = ' .$val . '<br />'; 
} 
} 
?>

</body> 
</html>

