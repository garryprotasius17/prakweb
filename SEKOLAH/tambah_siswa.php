<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <div class="container" style="margin-top: 80px;"> 
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class = "card">
                    <div class="card-header">
                        Tambah Data SISWA
                    </div>
                    <div class="card-body">
                        <form action="simpan_siswa.php" method="post">
                            <div class="form-group">
                                <label >NISN</label>
                                <input type="text" name="nim" placeholder="Masukkan NISN siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Nama lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat siswa" rows="4"></textarea>
                            </div>
                            
                            <button tpye="submit" class="btn btn-success">SIMPAN</button>
                            <button tpye="reset" class="btn btn-warning">reset</button>
                            <a href="index.php" class="btn btn-md btn-danger">BATAL</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>