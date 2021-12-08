<?php
@ob_start();
@session_start();
require_once 'includes/header.php';

@$user = @$_SESSION["user"];
$sql = "SELECT * FROM kullanici WHERE username='$user'";
$sorgu = $db->query($sql);
$row = $sorgu->rowCount();

if($row==1){
    header("Location:profil.php");
    exit;
}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3>Kullanıcı Kayıt</h3>
                    </div>
                    <p class="card-text">
                    <form method="POST" action="kayitol.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kullanıcı Adı</label>
                            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Parola</label><br>
                            <input class="form-control" type="password" name="parola" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hakkında</label><br>
                            <textarea class="form-control" name="hakkinda" id="" cols="70" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Görsel</label><br>
                            <input class="form-control" type="file" name="gorsel" id="">
                        </div>

                        <button type="submit" name="kayitol" class="btn btn-primary">KAYIT OL</button>
                    </form>
                    <?php
                    if (@$_GET["kayit"] == "ok") {
                        echo '<div class="alert alert-success mt-2">KAYIT BAŞARILI</div>';
                    } else if (@$_GET["kayit"] == "no") {
                        echo '<div class="alert alert-danger mt-2">KAYIT BAŞARISIZ</div>';
                    } else if(@$_GET["dosya"]=="no"){
                        echo '<div class="alert alert-danger mt-2">Dosyanın jpg ve png formatı makbuldür.</div>';
                    }

                    else if(@$_GET["uye"]=="var"){
                        echo '<div class="alert alert-danger mt-2">Öyle biri sistemde.</div>';
                    }

                    ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3>Kullanıcı Giriş</h3>
                    </div>
                    <p class="card-text">
                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kullanıcı Adı</label>
                            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Parola</label><br>
                            <input class="form-control" type="password" name="parola" id="">
                        </div>

                        <button type="submit" name="giris" class="btn btn-primary">GİRİŞ YAP</button>
                    </form>

                    <?php

                    if (isset($_POST["giris"])) {
                        $user = $_POST["user"];
                        $pass = $_POST["parola"];
                        $sql = "SELECT * FROM kullanici WHERE username='$user' and pass='$pass'";
                        $sorgu = $db->query($sql);
                        $kontrol = $sorgu->rowCount();
                        if ($kontrol == 1) {

                            $_SESSION["user"] = $user;
                            header("Location:profil.php");
                            exit;

                        } else {
                            echo '<div class="alert alert-danger mt-2">HATALI BİLGİLER</div>';
                            exit;
                        }
                    }

                    
                    if(@$_GET["islem"]=="basarili"){
                        echo "<div class='alert alert-success mt-2'>Başarıyla değiştirildi</div>";
                    }
                    
                   


                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>