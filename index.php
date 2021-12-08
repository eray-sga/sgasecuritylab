<?php 
require_once 'includes/header.php';  

$useragent =  $_SERVER['HTTP_USER_AGENT']; 
$server =  $_SERVER['SERVER_SOFTWARE']; 

$blog=$db->query("SELECT * FROM blog");
$blog->execute();
?>

    <section id="blog" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <?php 
                    while($blogcek=$blog->fetch(PDO::FETCH_ASSOC)){ ?>

                    
                    <div class="card">
                        <div class="card-body">
                            <a href="blogdetay.php?id=<?php echo $blogcek["id"]; ?>" class="card-title"><?php echo $blogcek["title"]; ?></a>
                            <p class="card-text"><?php echo substr($blogcek["description"],0,100) ; ?> <a href="blogdetay.php?id=<?php echo $blogcek["id"]; ?>">[...] </a></p>
                            <a href="blogdetay.php?id=<?php echo $blogcek["id"]; ?>" class="btn btn-success btn-sm">Devamını oku</a>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php'; ?>