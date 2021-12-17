<?php
include('koneksi.php');
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tbl_siswa (nim,nama_lengkap,alamat) VALUES ('$nim','$nama_lengkap','$alamat')";

if ($conn->query($query)) {
    # code...
    header("location:index.php");
}else{
    echo "Data gagal Disimpan";
}
?>