<?php
require_once 'includes/header.php';

if(isset($_POST["gonder"])){
    $deger = $_POST["deger"]
   if (PHP_OS_FAMILY === 'Windows') {
        $sonuc = shell_exec("set /a $deger");
    } else {
        $sonuc = shell_exec("echo $(( $deger ))");
    }
    echo '<h3 style="padding-left:50px; padding-top:20px">Sonuç: '.$sonuc.'</h3>';
  
}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="hesap.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">İşlemi Gir(Örn: 5+4)</label>
                            <input name="deger" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" name="gonder" class="btn btn-primary">GÖNDER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>