<?php 
require_once 'system/db.php';


if (isset($_POST['gonder'])) { //ekibimiz düzenleme işlemi

    $duzenle=$db->prepare("UPDATE kullanici SET
    username=:user,
    pass=:pass,
    hakkinda=:hakkinda
    
    WHERE id={$_POST['id']}");
$update=$duzenle->execute(array(
    'user' => $_POST['user'],
    'pass' => $_POST['pass'],
    'hakkinda' => $_POST['hakkinda']
    ));

$id=$_POST['id'];

if ($update) {

    Header("Location:profil.php?id=$id&islem=basarili");

} else {

    Header("Location:profil.php?islem=basarisiz");
}


	}

    ?>
