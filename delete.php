<?php 
    include('./includes/koneksi.php');
    include('./includes/source.php');

    $id = $_GET["id"];
    if($koneksi)
    {
        $sql = "DELETE FROM list_mahasiswa WHERE id=$id";
        mysqli_query($koneksi, $sql);
        echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus 
        <a href = 'datamahasiswa.php' class='btn btn-primary'>Kembali</a></b></p>";
    }
    else {
        echo "<p class='alert alert-danger text-center'><b>Data Akun Gagal Dihapus. Terjadi Kesalahan : " . $koneksi->connect_error . "</b>,/p>";
    }
