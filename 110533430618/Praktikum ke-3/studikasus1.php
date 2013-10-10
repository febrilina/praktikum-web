<!DOCTYPE html>
<html>
	<head><title>Preseleksi</title></head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post">
	Data Asal Mahasiswa
	<select name="asal">
	
	<option value="Malang"
	<?php
	if (@$_POST['asal'] == 'Malang') { 
	echo 'selected';	
	}
	?> 
	>Malang

	<option value="Surabaya"
	<?php
	if(@$_POST['asal'] == "Surabaya" ){ 
	echo 'selected'; 
	}
	?>
	>Surabaya
	
	<option value="Medan" 
	<?php
				if(@$_POST['asal'] == "Medan"){ 
					echo 'selected'; 
				}
	?>
	>Medan
	
</select> </br>
<input type="submit" value="OK"/> 
</form>

<?php
if (isset($_POST['asal'])) { 
	echo  $_POST['asal']; 
}

?>


</body>
</html>