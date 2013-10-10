<?php
session_start();
include ("koneksi.php");
if (!$_SESSION['username'] && !$_SESSION['password']){

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username)){
    if (!empty($password)){
        $sql = mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
        $tes = mysql_num_rows($sql);
            if ($tes == 1){
                $hasil = mysql_fetch_assoc($sql);
                $_SESSION['username'] = $hasil['username'];
                $_SESSION['password'] = $hasil['password'];
                header("location:index.php");
            }else{
                echo "Kombinasi username dan password tidak cocok";
            }
    }else{
        echo "Anda belum mengisi password";
    }
}else{
    echo "Anda belum mengisi username";
}
}else{
    header("location:index.php");
}
?>