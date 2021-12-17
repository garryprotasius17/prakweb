<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container" style="margin-top: 80;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA SISWA
                    </div>

                    <div class="card-body">
                        <a href="tambah_siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Data</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('koneksi.php');
                                    $no = 1;
                                    $query = mysqli_query($conn,"SELECT * FROM tbl_siswa");
                                    while($row = mysqli_fetch_array($query))
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $row['nim']?></td>
                                    <td><?php echo $row['nama_lengkap']?></td>
                                    <td><?php echo $row['alamat']?></td>
                                    <td class ="text-center" >
                                        <a href="edit_siswa.php?id=<?php echo $row['id_siswa']?>" class = "btn btn-sm btn-primary">EDIT</a>
                                        <a href="hapus_siswa.php?id=<?php echo $row['id_siswa']?>" class = "btn btn-sm btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

</body>
</html>