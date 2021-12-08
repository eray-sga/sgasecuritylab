<?php
@ob_start();
@session_start();
require_once 'system/db.php';
require_once 'system/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGA - Web Security Lab</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <section id="logoHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mx-auto">
                    <div class="logo d-flex">
                        
                        <a href="https://www.youtube.com/channel/UCjZcTUoYCR5nLj8G1riUvLw" target="_blank"><img src="img/pp.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Ana Sayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ziyaretcidefteri.php"><i class="fas fa-comments"></i> Ziyaretçi Defteri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="benkimim.php"><i class="fas fa-user-secret"></i> Kimsin?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="hesap.php"><i class="fas fa-calculator"></i></i> Hesaplama</a>
                                </li>
                                <?php
                                if (@$_SESSION["user"]) {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="profil.php"><i class="fas fa-user"></i> Profil</a>
                                    </li>
                                    
                                <?php }
                                else {?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Kullanıcı Girişi</a>
                                    </li>
                               <?php }
                                ?>

                            </ul>
                            <form action="ara.php" method="post" class="form-inline my-2 my-lg-0">
                                <input name="ara" class="form-control mr-sm-2" type="search" placeholder="Arayan bulur..." aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>