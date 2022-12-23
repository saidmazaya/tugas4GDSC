<?php

include("./includes/koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM list_mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);

foreach ($result as $data) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Data Mahasiswa</title>
        <?php include('./includes/source.php');
        ?>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <?php include('./includes/sidebar.php');
                ?>
                <div class="col py-3 p-5">
                    <h3 class="text-uppercase text-center fw-bold"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data
                        Mahasiswa</h3>
                    <hr>
                    <form method="POST" action="ubahdata.php" class="my-login-validation" novalidate="">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" required autofocus value="<?= $data['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input id="nim" type="text" class="form-control" name="nim" required value="<?= $data['nim']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">Prodi</label>
                            <input id="prodi" type="text" class="form-control" name="prodi" required value="<?= $data['prodi']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <input id="angkatan" type="number" class="form-control" name="angkatan" required data-eye value="<?= $data['angkatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required value="<?= $data['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control mb-1" id="alamat" required value="<?= $data['alamat']; ?>">
                        </div>
                        <a href="datamahasiswa.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>
                    </form>
                <?php
            };
                ?>
                </div>
            </div>
        </div>
    </body>

    </html>