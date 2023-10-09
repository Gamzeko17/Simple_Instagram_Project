<?php
require_once("Connection.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container{
            display:flex;
        }

        .left-column,right-column{
            width:50%;
        }

        .box{
            height: 50px;
            width: 400px;
            margin-left: 55px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 84px; ">
        <div class="left-column ">
        <img src="İnstagramİmage.jpg" alt="" style="width:1000px;height:800px;border-radius:30px;">
        </div>

        <div class="right-column" style="margin-left: auto;margin-right: auto; margin-top: 45px;">
    
            <div class="card" style="width: 553px;height: 463px;margin-left: 515px;border-radius:35px;">
            <h5 style="text-align: center;font-family: cursive;font-size: x-large;margin-top:47px;">INSTAGRAM</h5>
    
            <form style="margin-top:16px;" method="POST" action="Login.php" >

            <div class="mb-3 box">
            <label for="user_name" class="form-label"></label>
            <input name="user_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı adı veya Telefon Numarası">
            </div>

            <div class="mb-3 box">
            <label for="password" class="form-label"></label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
            </div>
            <br>

            <button type="submit" class="btn btn-primary box"><a href="Login.php" style="color:white;">Giriş Yap</a></button>

            </form>
        </div>
        <br>
        <br>

        <div class="card" style="width:546px; height:109px; margin-left:515px; border-radius:22px;">
        <p style="margin-left:159px;margin-top: 17px;"class="card-text">Hesabın yok mu ? <a href="RegistrationForm.php">Kaydol</a></p>
        </div>

        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

<?php
$sql = null;
?>