<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$PetugasID = $_POST['id_petugas'];


// menghapus data dari database
mysqli_query($koneksi,"delete from petugas where id_petugas='$PetugasID'");

// mengalihkan halaman kembali ke data_barang.php
header("location:data_pengguna.php?pesan=hapus");

?>