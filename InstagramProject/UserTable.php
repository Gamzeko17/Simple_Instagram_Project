<?php
require_once("Connection.php");

$Sorgu = $sql->prepare("SELECT * FROM user_kayit");
$Sorgu->execute();

$Kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="card" style="
    width: 1300px;
    height: 1000px;
    margin-left: auto;
    margin-right: auto;
    background-color: #E9DCD6;">
<div class="card-body">

<div class="row">
        
        <div class="col-md-4 text-end" style="margin-left:auto;">
            <a href="RegistrationForm.php" class="btn btn-success" style="font-family:cursive;background-color: #C99297;color:black;font-size: large;">Kullanıcı Ekle</a>
        </div>
</div>
<hr>

<table class="table" style="background-color: #E9DCD6;">
    <?php
        if (count($Kayitlar) > 0){
    ?>
        <thead>
        <tr>

            <th scope="col" style="background-color:#C06C84;font-family: cursive;font-size: larger;">İD</th>
            <th scope="col" style="background-color:#C06C84;font-family: cursive;font-size: larger;">EMAİL</th>
            <th scope="col" style="background-color:#C06C84;font-family: cursive;font-size: larger;">TELEFON NUMARASI</th>
            <th scope="col" style="background-color:#C06C84;font-family: cursive;font-size: larger;">İSİM SOYİSİM</th>
            <th scope="col" style="background-color:#C06C84;font-family: cursive;font-size: larger;">KULLANICI ADI</th>
            <th scope="col" style="background-color:#C06C84;font-family: cursive;font-size: larger;">ŞİFRE</th>
            <th style="background-color:#C06C84"></th>
            <th style="background-color:#C06C84"></th>
        </tr>
        </thead>
        <tbody>

    <?php
        foreach($Kayitlar as $user){
    ?>
        <tr style="font-size: larger;">
            <td><?php echo $user["id"]; ?></td>
            <td><?php echo $user["email"]; ?></td>
            <td><?php echo $user["phone_number"]; ?></td>
            <td><?php echo $user["name_surname"]; ?></td>
            <td><?php echo $user["user_name"]; ?></td>
            <td><?php echo $user["password"]; ?></td>
            <td><a class="btn btn-primary box" href="Delete.php?id=<?php echo $user["id"]; ?>" role="button" style="text-decoration:none;color:black;background-color:#F67280;border-radius:7px;width:62px">Sil</a></td>
            <td><a class="btn btn-primary box" href="RegistrationForm.php?id=<?php echo $user["id"]; ?>" role="button" style="text-decoration:none;color:black;background-color:#F8B195;border-radius:7px">Güncelle</a></td>
        </tr>
    <?php
        }
    ?>
        </tbody>
    <?php
        }else{
    ?>

    <div class='alert alert-danger text-danger text-center'>Kullanıcı Bulunamadı</div>
    <?php
        }
    ?>
</table>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
<?php
$sql =null;
?>
