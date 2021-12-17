<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM tbl_siswa WHERE id_siswa =$id LIMIT 1";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_array($result);
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
    <div class="container" >
        <div class ="row">
            <div class=col-md-8 offset-md-2>
                <div class="card">
                    <div class="card-header">
                        Edit Siswa
                    </div>
                    <div class = "card-body" >
                        <form action="update_siswa.php" method="post">
                            <div class = "form-group">
                                <label > NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nim']?>" placeholder="Masukkan NISN siswa" class="form-control"> 
                                <input type="hidden" name ="id_siswa" value = "<?php echo $row['id_siswa']?>"> 
                            </div>

                            <div class="form-group">
                                <label> Nama Lengkap</label>
                                <input type="text" name = "nama_lengkap" value="<?php echo $row['nama_lengkap']?>" placeholder="Masukkan Nama Siswa" class = "form-control">
                            </div>
                            <div class = "form-group">
                                <label> Alamat </label>
                                <textarea class="form-control" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan Alamat Siswa" rows="4"> </textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="submit" class="btn btn-warning">Reset</button>
                            <a href="index.php" class ="btn btn-md btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

