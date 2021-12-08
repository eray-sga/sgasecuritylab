<?php 
require_once 'includes/header.php'; 

$id = $_GET["id"];

$sql = "SELECT * FROM blog WHERE id='$id'";
$blog = $db->query($sql)->fetch();

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3><?php echo $blog["title"]; ?></h3></div>
                    <p class="card-text"><?php echo $blog["description"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>