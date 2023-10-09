<?php
require_once("Connection.php");

$Email = @$_POST["email"];
$Number = @$_POST["phone_number"];
$NameSurname = @$_POST["name_surname"];
$UserName = @$_POST["user_name"];
$Password = @$_POST["password"];

$Sorgu = $sql->prepare("INSERT INTO user_kayit (email, phone_number, name_surname, user_name, password) VALUES (?, ?, ?, ?, ?)");
$Sorgu->execute([$Email, $Number, $NameSurname, $UserName, $Password]);

if($sorgu){
    Header("Location:http://localhost/InstagramProject/RegistrationForm.php");
    exit();
}else{
    Header("Location:http://localhost/InstagramProject/UserTable.php");
    exit();
}

?>