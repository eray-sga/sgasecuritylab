<?php require_once 'includes/header.php';  ?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php

                if ($_POST) {
                    $ara = $_POST["ara"];

                    if (!$ara) {
                        echo "<div class='alert alert-danger'>boş bırakma</div>";
                    } else {
                        $sonuc = $db->query("SELECT * from blog where title like '%$ara%' ");
                        $bul = $sonuc->rowCount();

                        if ($bul) {
                            echo '<div class="alert alert-success"><strong>' . $ara . '</strong> aramanız için ' . $bul . ' sonuç bulundu</div>';
                            foreach ($sonuc as $bulunan) { ?>
                                <div class="card">
                                    <div class="card-body">
                                        <a href="blogdetay.php?id=<?php echo $bulunan["id"]; ?>" class="card-title"><?php echo $bulunan["title"]; ?></a>
                                        <p class="card-text"><?php echo substr($bulunan["description"], 100); ?> <a href="blogdetay.php?id=<?php echo $bulunan["id"]; ?>">[...] </a></p>
                                        <a href="blogdetay.php?id=<?php echo $bulunan["id"]; ?>" class="btn btn-success btn-sm">Devamını oku</a>
                                    </div>
                                </div>
                <?php }
                        } else {
                            echo "$ara aramanız için sonuç yok.";
                        }
                    }
                }


                ?>

            </div>
        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?>