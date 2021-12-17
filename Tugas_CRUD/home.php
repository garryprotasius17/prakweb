<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container" style="margin-top: 80;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA MAHASISWA 
                    </div>
                    <div class="card-body">
                        <a href="tambah_data.php" class="btn btn-md btn-success" style="margin-bottom: 10px;">Tambah Data</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">TEMPAT LAHIR</th>
                                    <th scope="col">TANGGAL LAHIR</th>
                                    <th scope="col">JURUSAN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('koneksi.php');
                                    $no = 1;
                                    $query = mysqli_query($connection, "SELECT * FROM tbl_mhs");
                                    while($row = mysqli_fetch_array($query))
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $row['npm']?></td>
                                    <td><?php echo $row['nama']?></td>
                                    <td><?php echo $row['tmpt_lahir']?></td>
                                    <td><?php echo $row['tgl_lahir']?></td>
                                    <td><?php echo $row['jurusan']?></td>
                                    <td class="text-center" >
                                        <!-- <a href="view_data.php?id=<?php echo $row['id_mhs'] ?>" class="btn btn-sm btn-info" >VIEW</a> -->
                                        <a href="edit_data.php?id=<?php echo $row['id_mhs'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="hapus_data.php?id=<?php echo $row['id_mhs'] ?>" class = "class=btn btn-sm btn-danger" > <i class="fa fa-trash"></i> HAPUS </a>
                                    </td>
                                </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<!-- Batas Script -->
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