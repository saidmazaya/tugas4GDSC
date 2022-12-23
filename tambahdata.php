<?php
require_once './includes/koneksi.php';
include('./includes/source.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO list_mahasiswa (nama, nim, prodi, angkatan, email, alamat) VALUES ('$nama', '$nim', '$prodi', '$angkatan', '$email', '$alamat')";

if ($koneksi->query($sql) == TRUE) {
    echo "<p class='alert alert-success text-center'><b>Registrasi Akun Anda Berhasil
    <a href = 'datamahasiswa.php' class='btn btn-primary'>Kembali</a></b></p>";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br/>" . $koneksi->error;
}
$koneksi->close();

?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>