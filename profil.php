<?php
@ob_start();
@session_start();
require_once 'includes/header.php';
@$user = @$_SESSION["user"];
$sql = "SELECT * FROM kullanici WHERE username='$user'";
$sorgu = $db->query($sql);
$row = $sorgu->rowCount();

if($row==0){
    header("Location:login.php");
    
}

$sorgu=$db->prepare("SELECT * FROM kullanici where username=:user");
      $sorgu->execute(array(
        'user'=>$user
      ));
      $vericek=$sorgu->fetch(PDO::FETCH_ASSOC);
     
    
      
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3> <strong style="color:green;"><?php echo @$_SESSION["user"]; ?></strong> Profil Ayarları</h3>
                        <a class="nav-link" href="cikis.php"><i class="fas fa-power-off"></i> Çıkış</a>
                    </div>
                    <p class="card-text">
                    <form method="POST" action="profilguncelle.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kullanıcı Adı</label>
                            <input name="user" value="<?php echo $vericek["username"]; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Parola</label><br>
                            <input name="pass" value="<?php echo $vericek["pass"]; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hakkında</label><br>
                            <textarea class="form-control" name="hakkinda" id="" cols="60" rows="10"><?php echo $vericek["hakkinda"]; ?></textarea>
                        </div>
                        
                        <button type="submit" name="gonder" class="btn btn-primary mt-2">GÖNDER</button>

                        <input type="hidden" name="id" value="<?php echo $vericek['id'] ?>">
                        
                    </form>

                    <?php 
                    if(@$_GET["islem"]=="basarili"){
                        echo '<div class="alert alert-success mt-2">BAŞARILI</div>';
                    } else if(@$_GET["islem"]=="basarisiz"){
                        echo '<div class="alert alert-danger mt-2">BAŞARISIZ</div>';
                    }
                    
                    
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>