<?php

include('./includes/koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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
                <h3 class="text-uppercase text-center fw-bold"><i class="fa-solid fa-table-list"></i>&nbsp;Tabel Data
                    Mahasiswa</h3>
                <hr> <br>
                <a href="tambah.php" class="btn btn-primary mb-3"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah
                    Mahasiswa</a>
                <br><br>
                <table class="table table-bordered" id="tabel">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Prodi</th>
                            <th>Angkatan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $query = "SELECT * FROM list_mahasiswa";
                        $hasil = mysqli_query($koneksi, $query);
                        foreach ($hasil as $mhs) :
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $mhs["nama"] ?></td>
                                <td><?= $mhs["nim"] ?></td>
                                <td><?= $mhs["prodi"] ?></td>
                                <td><?= $mhs["angkatan"] ?></td>
                                <td class="text-center"><a href="detail.php?id=<?= $mhs["id"]; ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i>&nbsp;Detail</a> |
                                    <a href="ubah.php?id=<?= $mhs["id"]; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>&nbsp;Edit</a> |
                                    <a href="delete.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Apakah Anda yakin menghapus')" class="btn btn-danger"><i class="bi bi-trash"></i>&nbsp;Delete</a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#tabel').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ]
            });
        });
    </script>
</body>

</html>