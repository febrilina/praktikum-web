<?php
session_start();
include ("koneksi.php");
if ($_SESSION['username'] && $_SESSION['password']){
    $sql = mysql_query("SELECT * FROM user WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'");
    $hasil = mysql_fetch_assoc($sql);
        echo "<h1>Halaman Administrator</h1>";
        echo "Selamat Datang <b>".$hasil['nama']."</b> | <a href='logout.php'>Logout</a>";
}else{
    header("location:login.php");
}
?>
