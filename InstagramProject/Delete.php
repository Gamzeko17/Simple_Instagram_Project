<?php
require_once("Connection.php");

$userId = $_GET["id"];

$sorgu = "DELETE FROM user_kayit WHERE user_kayit.id=?";
$sorguKontrol = $sql->prepare($sorgu);
$sorguCalis = $sorguKontrol->execute([$userId]);

if($sorguCalis){
    Header("Location:http://localhost/InstagramProject/UserTable.php");
    exit();
}else{
    Header("Location:http://localhost/InstagramProject/UserTable.php");
    exit();
}
?>