<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My App</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Apotik Sehat</a>
                    <button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#navbarSupportedContent" ariacontrols="#navbarSupportedContent" aria-expanded="false" arialabel="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                        <?php
                        if (!isset($_SESSION['username'])){
                            ?>
                            <a class="nav-link btn btn-primary btn-sm dflex justify-content-end" style="color:black;" aria-current="page" href="login.php">Login</a>
                        <?php } else { ?>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdowntoggle" type="button" id="dropdownMenuButton1" data-bstoggle="dropdown" aria-expanded="false">
                                    <b>
                                        <?php
                                        echo $_SESSION['username']; ?>
                                    </b>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="admin">Dashboard Admin</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
            <style>
                .carousel-item img{
                    opacity: 0.5;
                    min-height: 550px;
                    max-height: 550px;
                }
            </style>
            <div class="row mt-3 justify-content-center">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bstarget="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bstarget="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bstarget="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        $panggil=$koneksi->query("SELECT * FROM hero limit 3");
                        while($row=$panggil->fetch_assoc()){
                            ?>
                            <div class="carousel-item
                            <?php if($row['status']=='aktif'){
                                echo 'active';
                            }
                            ?>" data-bsinterval="4000">
                            <img src="assets/img/<?=$row['gambar']; ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-mdblock">
                                <h2><?=$row['judul']; ?></h2>
                                <p><?=$row['subjudul']; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Preview</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>