<?php
require_once("Connection.php");

$userId = @$_GET["id"];
$Email = @$_POST["email"];
$Number = @$_POST["phone_number"];
$NameSurname = @$_POST["name_surname"];
$UserName = @$_POST["user_name"];
$Password = @$_POST["password"];

$sorgu = "UPDATE user_kayit SET email=?, phone_number=?, name_surname=?, user_name=?, password=? WHERE id=?";
$sorguKontrol = $sql->prepare($sorgu);
$sorguKontrol->execute([$Email, $Number, $NameSurname, $UserName, $Password, $userId]);
//$SorguCalis = $sorguKontrol->rowCount();

if($sorguKontrol){
    Header("Location:http://localhost/InstagramProject/UserTable.php");
    exit();
}else{
    Header("Location:http://localhost/InstagramProject/RegistrationForm.php?id=".$userId);
    exit();
}
?>