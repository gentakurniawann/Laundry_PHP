<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Laundry</title>
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
                <h3 class="text-center mt-2 mb-3">Data Transaksi<h3>
                <form action="data_transaksi.php" method="post">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Member</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Tanggal Pengembalian</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            if (isset($_POST["cari"])) {
                                // jika ada keyword pencarian 
                                $cari=$_POST['cari'];
                                $query_transaksi= mysqli_query($koneksi,"select * from transaksi join member on member.id_member = transaksi.id_member join admin on admin.id_admin = transaksi.id_admin
                                where id_transaksi like '%$cari%' or nama_member like '%$cari%' or tgl like '%$cari%' or status like '%$cari%' or dibayar like '%$cari%'");
                            }else{
                                //jika tidak ada keyword pencarian
                                $query_transaksi= mysqli_query($koneksi,"select * from transaksi join member on member.id_member = transaksi.id_member join admin on admin.id_admin = transaksi.id_admin");
                            }
                            while($data_transaksi= mysqli_fetch_array($query_transaksi)) { ?>
                                <tr>
                                    <td><?php echo $data_transaksi["id_transaksi"]; ?></td>
                                    <td><?php echo $data_transaksi["nama_member"]; ?></td>
                                    <td><?php echo $data_transaksi["tgl"]; ?></td>
                                    <td><?php echo $data_transaksi["batas_waktu"]; ?></td>
                                    <td><?php echo $data_transaksi["tgl_bayar"]; ?></td>
                                    <td><?php echo $data_transaksi["status"]; ?></td>
                                    <td><?php echo $data_transaksi["dibayar"]; ?></td>
                                    <td> <a href="ubah_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-success">Ubah Status</a></td>
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