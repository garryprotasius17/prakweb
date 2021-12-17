<?php
    include('koneksi.php');

    //get id
    $npm=$_GET['npm'];

    $query = "DELETE FROM tbl_mhs WHERE id_mhs = '$npm'";

    if ($connection->query($query)) {
        # code...
        header("location:home.php");
    }else {
        # code...
        echo "Data Gagal Dihapus!!";
    }
?>

