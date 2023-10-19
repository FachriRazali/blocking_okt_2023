<?php include '../config.php';
if (!isset($_SESSION['username'])){
    header("location:../login.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyApp</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MyApp</a>
                <button class="navbar-toogler" type="button" data-bstoggle="collapse" data-bs-target="#nabarSupportedContent" ariacontrols="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav=item">
        <a class="nav-link active" aria-currents="page" href="#">Herok</a>
</li>
</ul>
<?php

if (!isset($_SESSION['username'])) {
    ?>
    <a class="nav- link btn btn-primary btn-sm d-flex justify-content-end" style="color:white;" aria-current="page" href="login.php">Login</a>
<?php } else { ?>
    <div class="dropdown">
        <button class="btn btn-secondary dropdowntoggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expended="false">
            <b> <?php echo $_SESSION ['nmUser']; ?></b>
</button>
<ul class="dropdown-menu" arialabelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="../">Halaman Utama</a></li>
    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
</ul>
</div>

<?php } ?> 
</div>
</div>
</nav>
<div class="row">
    <div class="col mt-3">
        <h4>Manajemen Hero</h4>
</div>
</div>
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hero</li>
  </ol>
</nav>
<div class="row">
    <div class="col">
        <?php if (isset($_GET['gagal'])) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-excalamationtriangle"></i></strong> <?= $_SESSION ['gagalposting']; ?>
                <button>
        </div><?php   } ?>
        <a href="#" class="btn btn-primary btn-sm float-end mb-2" data-bs-toggle="modal" data-bs-target="#tambahdata"><i class="fas faplus"></i> tambah data</a>
        </div>
        </div>
        <table class="table table-striped table-sm mt-1" id="tabel">
            <thead>
                <tr>
                <th>No</th>
                <th>Judul</th>
                <th width=30%>Sub Judul</th>
                <th>Status</th>
                <th>Gambar</th>
                <th>Action</th>
        </tr>
        <thead>
            <?php$no = 1;$panggil = $koneksi->query("SELECT * FROM hero order by idHero desc ");
            ?>
            <?php while ($row = $panggil->fetch_array()) { ?>
                <tbody>
                    <tr>
                    <td class="align-middle"><?=  $no++; ?></td>
                    <td class="align-middle"><?=  $row['judul']; ?></td>
                    <td class="align-middle"><?=  $row['subjudul']; ?></td>
                    <td class="align-middle"><?=  $row['status']; ?></td>
                    <td class="align-middle"><img src="../assets/img/<?= $row['gambar']; ?>" width="100" height="100"></td>
                    <td class="align-middle"><a data-href="#" class="btn btn-warning btn-sm update" data-bs-toggle="modal" data-bstarget="#editdata" data-idHero="<?= $row['idhero'] ?>" data-judul="<?= $row['judul'] ?>" data-subjudul="<?= $row['subjudul'] ?>"><i class="fas fa-pen"></i></a> <a href="konfigurasi.php?delete=<?= $row['idHero']; ?>"class="btn btn-danger btn-sm"><i class="fas fa trash"></i> </a></td>
            </tr> 
            </tbody>
            <?php  }?>
            </table>
            </div>

            

          

     