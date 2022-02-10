<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_data.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
    ?>
    <!-- tabel -->
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 mb-3">Data Admin<h3>
                <form action="data_admin.php" method="post">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            if (isset($_POST["cari"])) {
                                // jika ada keyword pencarian 
                                $cari=$_POST['cari'];
                                $query_admin= mysqli_query($koneksi,"select * from admin where id_admin like '%$cari%' or nama_admin like '%$cari%'");
                            }else{
                                //jika tidak ada keyword pencarian
                                $query_admin= mysqli_query($koneksi,"select * from admin");
                            }
                            while($data_admin= mysqli_fetch_array($query_admin)) { ?>
                                <tr>
                                    <td><?php echo $data_admin["id_admin"]; ?></td>
                                    <td><?php echo $data_admin["nama_admin"]; ?></td>
                                    <td><?php echo $data_admin["username"]; ?></td>
                                    <td> <a href="ubah_admin.php?id_admin=<?=$data_admin['id_admin']?>" class="btn btn-success">Ubah</a> | <a href="hapus_admin.php?id_admin=<?=$data_admin['id_admin']?>" onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
                <a href="tambah_admin.php"><button class="btn btn-add">Add Admin</button></a>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>