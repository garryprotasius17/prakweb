<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$npm = $_POST['npm'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tmpt_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jurusan = $_POST['jurusan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_mhs SET npm='$npm',nama='$nama_lengkap', tmpt_lahir='$tempat_lahir',tgl_lahir='$tanggal_lahir',jurusan='$jurusan'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: home.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
© 2021 GitHub, I