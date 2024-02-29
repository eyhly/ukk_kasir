
<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$PetugasID = $_POST['id_petugas'];
$NamaPetugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

// update data ke database
if (!$password) {
	mysqli_query($koneksi,"update petugas set nama_petugas='$NamaPetugas', username='$username', level='$level' where id_petugas='$PetugasID'");
} else {
	mysqli_query($koneksi,"update petugas set nama_petugas='$NamaPetugas', username='$username', password='$password', level='$level' where id_petugas='$PetugasID'");
}

// mengalihkan halaman kembali ke data_barang.php
header("location:data_pengguna.php?pesan=update");

?>