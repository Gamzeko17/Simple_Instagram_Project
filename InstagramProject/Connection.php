<?php
try{

    $sql = new PDO("mysql:host=localhost;dbname=instagram_project","root","");
}catch(PDOException $hata){

    echo "HATA :".$hata->getMessage();
    die();
}
?>