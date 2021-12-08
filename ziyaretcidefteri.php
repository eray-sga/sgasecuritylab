<?php

require_once 'includes/header.php';

if (isset($_POST["gonder"])) {
    $yazar = $_POST["yazar"];
    $mesaj = $_POST["mesaj"];

    $sql = "INSERT INTO ziyaret(author,mesaj) VALUES ('$yazar','$mesaj')";
    $db->query($sql);
    header("Location:ziyaretcidefteri.php");
    
}

if(isset($_POST["temizle"])){
    $sql = "DELETE FROM ziyaret";
    $db->query($sql);
    header("Location:ziyaretcidefteri.php");
}

?>

<div class="container mt-5">
    <h3 class="text-center">BİZE BİR ŞEYLER GÖNDER</h3>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="POST" action="ziyaretcidefteri.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Yazar</label>
                    <input name="yazar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mesaj</label><br>
                    <textarea class="form-control" name="mesaj" id="" rows="5" cols="70"></textarea>
                </div>

                <button type="submit" name="gonder" class="btn btn-primary">GÖNDER</button>
                <button type="submit" name="temizle" class="btn btn-success">ZİYARETÇİ DEFTERİNİ TEMİZLE</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center">MESAJLAR</h3>
            <?php
            $liste = "SELECT * FROM ziyaret";
            $run = $db->query($liste);
            if ($run) {
                foreach ($run as $listecek) { ?>
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $listecek["author"]; ?>
                            </h4>
                            <div class="card-text"><?php echo $listecek["mesaj"]; ?></div>
                        </div>
                    </div>
            <?php }
            }

            ?>
        </div>
    </div>
</div>



<?php require_once 'includes/footer.php'; ?>