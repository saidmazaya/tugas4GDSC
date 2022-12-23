<?php

include('./includes/koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <?php include('./includes/source.php');
    ?>
    <link rel="stylesheet" href="style.css">
    <style>
        .details {
            background: #f5f5f5;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include('./includes/sidebar.php');
            ?>
            <div class="col py-3 p-5">
                <h3 class="d-flex justify-content-between fw-bold">DETAIL DATA MAHASISWA <a href="datamahasiswa.php" class="btn btn-info text-right">Kembali</a> </h3>

                <hr> <br>
                <div class="details">
                    <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM list_mahasiswa WHERE id = $id";
                    $hasil = mysqli_query($koneksi, $query);
                    foreach ($hasil as $mhs) :
                    ?>
                        <h4>Nama</h4>
                        <p><?= $mhs["nama"] ?></p>
                        <h4>NIM</h4>
                        <p><?= $mhs["nim"] ?></p>
                        <h4>Prodi</h4>
                        <p><?= $mhs["prodi"] ?></p>
                        <h4>Angkatan</h4>
                        <p><?= $mhs["angkatan"] ?></p>
                        <h4>Email</h4>
                        <p><?= $mhs["email"] ?></p>
                        <h4>Alamat</h4>
                        <p><?= $mhs["alamat"] ?></p>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>