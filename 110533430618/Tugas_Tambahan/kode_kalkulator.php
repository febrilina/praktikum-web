<?php 
if($_POST['submit']){
	$bil1=$_POST["angka_1"];
	$bil2=$_POST["angka_2"];
	$hasil=$_POST["hasil"];
	$operator=$_POST["operator"];
	if($operator == "+"){
		$hasil=$bil1+$bil2 ;
	} else if ($operator == "-") {
		$hasil=$bil1-$bil2 ;
	} else if ($operator == "*") {
		$hasil=$bil1*$bil2 ;
	} else if ($operator == "/") {
		$hasil=$bil1/$bil2 ;
	}
}
?>
    	<script type="text/javascript">
        	document.location="kalkulator.php?b1=<?php echo $bil1;?>&&b2=<?php echo $bil1;?>&&b3=<?php echo $hasil; ?>";
        </script>