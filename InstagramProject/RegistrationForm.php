<?php
require_once("Connection.php");
$userId = @$_GET["id"];
$postUrl = "İnsert.php";

if(isset($userId)){
    $sorgu = "SELECT * FROM user_kayit WHERE id = $userId";
    $sorguKontrol = $sql->query($sorgu);
    $sorguKontrol->execute();

    $user = $sorguKontrol->fetch(PDO::FETCH_OBJ);
    $postUrl = "Update.php";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!--BİRİNCİ KART-->
<div class="card" style="width: 39rem;
    background-color: ghostwhite;
    height: 829px;
    margin-left: auto;
    margin-right: auto;
    margin-top:36px;">

<h5 style="text-align: center;font-family: cursive;font-size: xx-large;margin-top:47px;"><b>INSTAGRAM</b></h5>
<br>
<p style="text-align:center;font-size: 21px;font-family:emoji;">Arkadaşlarının fotoğraf ve videolarını görmek için kaydol</p>
<br>

<button type="submit" class="btn btn-primary" style="
width: 479px;
margin-left: auto;
margin-right: auto;">
<a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124024574287414&kid_directed_site=0&app_id=124024574287414&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D124024574287414%26locale%3Dtr_TR%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignup%252F%26response_type%3Dcode%252Cgranted_scopes%26scope%3Demail%26state%3D%257B%2522fbLoginKey%2522%253A%2522wsmxb9167c5jtmp0x0o10vouwmbtuex0ntngy61w9wkpoyu4oxl%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%2522%257D%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D9b3c27d6-4819-4839-807c-965ce9dbc1a0%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522fbLoginKey%2522%253A%2522wsmxb9167c5jtmp0x0o10vouwmbtuex0ntngy61w9wkpoyu4oxl%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%2522%257D%23_%3D_&display=page&locale=tr_TR&pl_dbl=0" style="color:white;text-decoration:none">Facebook ile Giriş Yap</a></button>
<br>
<hr>


<form method="POST" action="<?php echo $postUrl; ?>" style="
    width: 477px;
    margin-left: auto;
    margin-right: auto;" >

        <?php
            if(isset($user)){
        ?>
            <input type="hidden" name="id" value="<?php echo $userId; ?>">
        <?php
            }
        ?>

    
        <div class="mb-3">
            <label for="email_id" class="form-label"></label>
            <?php
                if (isset($user)){
            ?>
            <input  name="email" type="email" class="form-control" id="email_id" aria-describedby="emailHelp" placeholder="E-posta" value="<?php echo $user->email; ?>">
            <?php
                }else{ 
            ?>
            <input  name="email" type="email" class="form-control" id="email_id" aria-describedby="emailHelp" placeholder="E-posta">
            <?php
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="phone_number_id" class="form-label"></label>
            <?php
                if (isset($user)){
            ?>
            <input name="phone_number" type="text" class="form-control" id="phone_number_id" placeholder="Cep Telefon Numarası" value="<?php echo $user->phone_number; ?>">
            <?php
                }else{
            ?>
            <input name="phone_number" type="text"  class="form-control" id="phone_number_id" placeholder="Cep Telefon Numarası">
            <?php
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="name_surname_id" class="form-label"></label>
            <?php
                if (isset($user)){
            ?>
            <input name="name_surname" type="text"  class="form-control" id="name_surname_id" placeholder="Adı Soyadı" value="<?php echo $user->name_surname; ?>">
            <?php
                }else{
            ?>
            <input name="name_surname" type="text"  class="form-control" id="name_surname_id" placeholder="Adı Soyadı">
            <?php
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="user_name_id" class="form-label"></label>
            <?php
                if (isset($user)){
            ?>
            <input name="user_name" type="text"  class="form-control" id="user_name_id" placeholder="Kullanıcı Adı" value="<?php echo $user->user_name; ?>">
            <?php
                }else{
            ?>
            <input name="user_name" type="text"  class="form-control" id="user_name_id" placeholder="Kullanıcı Adı">
            <?php
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="password_id" class="form-label"></label>
            <?php
                if (isset($user)){
            ?>
            <input name="password" type="password"  class="form-control" id="password_id" placeholder="Şifre" value="<?php echo $user->password; ?>">
            <?php
                }else{
            ?>
            <input name="password" type="password"  class="form-control" id="password_id" placeholder="Şifre">
            <?php
                }
            ?>
        </div>

<p>Hizmetimizi kullanan kişiler senin iletişim bilgilerini instagrama'a yüklemiş olabilir.Kaydolarak Koşullarımızı ,Gizlilik İlkemizi ve Çerezler İlkemizi kabul etmiş olursunuz</p>

<button type="submit" class="btn btn-primary" style="margin-left: 72px;width: 341px;"><a href="İnsert.php" style="color: white;text-decoration: none">Kaydol</a></button>

</form>
</div>
<br>

<!--İKİNCİ KART-->
<div class="card" style="
width: 39rem;
background-color: ghostwhite;
height: 86px;
margin-left: auto;
margin-right: auto;">

<p style="margin-left:159px;margin-top: 17px;"class="card-text">Hesabın var mı? ? <a href="HomePage.php">Giriş Yap</a></p>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>








