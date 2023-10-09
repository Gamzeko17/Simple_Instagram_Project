<?php
require_once("Connection.php");

$KullaniciAdi = @$_POST["user_name"];
$Sifre = @$_POST["password"];

$sorgu = $sql->prepare("SELECT * FROM user_kayit WHERE user_name = '$KullaniciAdi' AND password = '$Sifre'");
$sorgu->execute([]);

if($sorgu){
    Header("Location:http://localhost/InstagramProject/UserTable.php");
    exit();
}else{
    Header("Location:http://localhost/InstagramProject/HomePage.php");
    exit();
}
?>