<?php
include("./includes/koneksi.php");
include ('./includes/source.php');

$no = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

if ($koneksi) {
    $sql = "UPDATE list_mahasiswa SET
    nama = '$nama', nim = '$nim', prodi = '$prodi', angkatan = '$angkatan', email = '$email', alamat = '$alamat'
    WHERE id = $no";
    mysqli_query($koneksi, $sql);
    echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan
    <a href = 'datamahasiswa.php' class='btn btn-primary'>Kembali</a></b></p>";
} elseif ($koneksi->connect_error) {
    echo "<p class='alert alert-danger text-center'><b>Terjadi kesalahan:$error</b></p>";
}
