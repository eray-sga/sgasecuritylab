<?php 
error_reporting(0);
require_once 'includes/header.php'; 

?>

<?php 
$useragent =  $_SERVER['HTTP_USER_AGENT']; 
$server =  $_SERVER['SERVER_SOFTWARE']; 

$liste = "SELECT * FROM benkimim WHERE useragent='$useragent' and serveragent='$server'";
$run = $db->query($liste);

if($run->rowCount()==0){
    $sql = "INSERT INTO benkimim(useragent,serveragent) VALUES ('$useragent','$server')";
    $db->query($sql);
}


?>

<?php
$liste = "SELECT * FROM benkimim WHERE useragent='$useragent' and serveragent='$server'";
$run = $db->query($liste)->fetch(); 
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h3>Tarayıcı Bilginiz:</h3><h5><?php echo $run["useragent"] ?></h5>
            <h3>Server Bilginiz:</h3> <h5><?php echo $run["serveragent"] ?></h5>
            <h3>Nereden geldin sen?</h3> <h5><?php echo $_SERVER['HTTP_REFERER'] ?></h5>
            <h3>Bu sensin galiba</h3> <h5><?php echo $_SERVER['REMOTE_ADDR'] ?></h5>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>