<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $query ="DELETE FROM tbl_siswa where id_siswa = '$id'";

    if ($conn->query('$query')) {
        header("locatio:index.php");
        # code...
    }else{
        echo "Data Gagal DiHapus";
    }

?>