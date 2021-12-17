
<?php
    include('koneksi.php');
    $npm=$_GET['npm'];
    $query="SELECT*FROM tbl_mhs WHERE id_mhs=$npm LIMIT 1";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Edit Siswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update_data.php" method="post">
                        <div class="form-group">
                                <label>NPM</label>
                                <input type="text" name="npm" value="<?php echo $row['npm'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                                <input type="hidden" name="id_siswa" value="<?php echo $row['npm'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row['nama']?>" placeholder="Masukan Nama Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="<?php echo $row['tmpt_lahir']?>" placeholder="Masukan tempat lahir Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" value="<?php echo $row['tgl_lahir']?>" placeholder="Masukan Tanggal Lahir Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" name="jurusan" value="<?php echo $row['jurusan']?>" placeholder="Masukan Nama Siswa" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a href="home.php" class="btn btn-md btn-danger">Batal</a>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>