<?php
include('koneksi.php');

//get data dari form
$npm = $_POST['npm'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tmpt_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jurusan = $_POST['jurusan'];

//query insert ke database
$query = "INSERT INTO tbl_mhs (npm, nama, tmpt_lahir,tgl_lahir,jurusan) VALUES ('$npm', '$nama_lengkap', '$tempat_lahir','$tanggal_lahir','$jurusan')";

//kondisi untuk pengecekan apakah query di atas berhasil
if ($connection->query($query)) {
    # code...
    header("location:home.php");
}else{
    // Kondisi ketika gagal insert data
    echo "Data Gagal Disimpan";
}

?>