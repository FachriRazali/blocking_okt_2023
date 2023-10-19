<!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Obat</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpasien">ID Obat</label>
                        <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="nmpasien">Nama Obat</label>
                        <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Obat</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Semua Umur" id="Semua Umur">
                            <label class="form-check-label" for="Semua Umur">Semua Umur</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Khusus Dewasa" id="Khusus Dewasa">
                            <label class="form-check-label" for="Khusus Dewasa">Khusus Dewasa</label>
                        </div>
                    </div>
                    
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
