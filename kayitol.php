<?php

require_once 'system/db.php';

if ($_POST["user"] != "" && $_POST["parola"] != "") {
    $user = $_POST["user"];
    $parola = $_POST["parola"];
    $hakkinda = $_POST["hakkinda"];

    $izin = array("image/png", "image/jpeg");

    $uploads_dir = 'gmisysasddsd/';
    @$tmp_name = $_FILES['gorsel']["tmp_name"];
    @$name = $_FILES['gorsel']["name"];
    $benzersizsayi1 = rand(20000, 32000);
    $benzersizsayi2 = rand(20000, 32000);
    $benzersizad = $benzersizsayi1 . $benzersizsayi2;
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . $name;
    if (!in_array($_FILES["gorsel"]["type"], $izin)) {
        header("Location:login.php?dosya=no");
    } else{
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $liste = "SELECT * FROM kullanici WHERE username='$user'";
        $run = $db->query($liste);

        if($run->rowCount()==0){
            $sql = "INSERT INTO kullanici(username,pass,hakkinda,gorsel) VALUES ('$user','$parola','$hakkinda','$refimgyol')";
            $db->query($sql);
            header("Location:login.php?kayit=ok");
        } else{
            header("Location:login.php?uye=var");
        }
    }
} else {
    header("Location:login.php?kayit=no");
}
