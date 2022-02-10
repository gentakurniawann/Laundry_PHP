<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <h3 class="text-center mt-2 mb-3">Data Member<h3>
                <form action="data_member.php" method="post">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Gender</th>
                            <th scope="col">No.telp</th>
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
                                $query_member= mysqli_query($koneksi,"select * from member where id_member like '%$cari%' or nama_member like '%$cari%' or username like '%$cari%'");
                            }else{
                                //jika tidak ada keyword pencarian
                                $query_member= mysqli_query($koneksi,"select * from member");
                            }
                            while($data_member= mysqli_fetch_array($query_member)) { ?>
                                <tr>
                                    <td><?php echo $data_member["id_member"]; ?></td>
                                    <td><?php echo $data_member["nama_member"]; ?></td>
                                    <td><?php echo $data_member["alamat"]; ?></td>
                                    <td><?php echo $data_member["jenis_kelamin"]; ?></td>
                                    <td><?php echo $data_member["tlp"]; ?></td>
                                    <td><?php echo $data_member["username"]; ?></td>
                                    <td> <a href="hapus_member.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>