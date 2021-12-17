<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>
<body>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH DATA MAHASISWA
                    </div>
                    <div class="card-body">
                        <form action="simpan_data.php" method="post">
                            <div class="form-group">
                                <label>NPM</label>
                                <input type="text" name="npm" placeholder="Masukan NPM mahasisswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukan Nama Mahasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tmpt_lahir" placeholder="Masukan Tempat Lahir Mahasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir Mahasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" name="jurusan" placeholder="Masukan Jurusan Mahasiswa" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                            <a href="home.php" class="btn btn-md btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Batas Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>