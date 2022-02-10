<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_dashboard.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
        include "koneksi.php";
    ?>
    <!-- tabel -->
    <div class="container my-3">
        <div class="row mb-3">
            <div class="col-sm-3">
                <div class="mini-stat">
                    <div class="row">
                        <div class="col-lg-4">
                            <i class="fas fa-users fa-3x py-3 px-3 icon-stat"></i>
                        </div>
                        <div class="col-lg-8">
                            <?php
                                $qry_jumlah_member=mysqli_query($koneksi, "select * from member");
                                $dt_jumlah_member=mysqli_num_rows($qry_jumlah_member);
                            ?>
                            <h3 class="mt-2" >Total Member</h3>
                            <h4><?php echo $dt_jumlah_member; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mini-stat">
                    <div class="row">
                        <div class="col-lg-4">
                            <i class="fas fa-user-tie fa-3x py-3 px-3 icon-stat"></i>
                        </div>
                        <div class="col-lg-8">
                            <?php
                                $qry_jumlah_admin=mysqli_query($koneksi, "select * from admin");
                                $dt_jumlah_admin=mysqli_num_rows($qry_jumlah_admin);
                            ?>
                            <h3 class="mt-2" >Total Admin</h3>
                            <h4><?php echo $dt_jumlah_admin; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mini-stat">
                    <div class="row">
                        <div class="col-lg-4">
                            <i class="fas fa-shopping-basket fa-3x py-3 px-3 icon-stat"></i>
                        </div>
                        <div class="col-lg-8">
                            <?php
                                $qry_jumlah_order_baru=mysqli_query($koneksi, "select * from transaksi where status like '%baru%'");
                                $dt_jumlah_order_baru=mysqli_num_rows($qry_jumlah_order_baru);
                            ?>
                            <h3 class="mt-2" >New Order</h3>
                            <h4><?php echo $dt_jumlah_order_baru; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mini-stat">
                    <div class="row">
                        <div class="col-lg-4">
                            <i class="fas fa-shopping-basket fa-3x py-3 px-3 icon-stat"></i>
                        </div>
                        <div class="col-lg-8">
                            <?php
                                $qry_jumlah_order=mysqli_query($koneksi, "select * from transaksi where status like '%baru%' or status like '%proses%' or status like '%selesai%'");
                                $dt_jumlah_order=mysqli_num_rows($qry_jumlah_order);
                            ?>
                            <h3 class="mt-2" >Total Order</h3>
                            <h4><?php echo $dt_jumlah_order; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 mb-3">Pesanan Baru<h3>
                <form action="dashboard.php" method="post">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nama Member</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Tanggal Pengembalian</th>
                            <th scope="col">Status</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            if (isset($_POST["cari"])) {
                                // jika ada keyword pencarian 
                                $cari=$_POST['cari'];
                                $query_dashboard= mysqli_query($koneksi,"select * from detail_transaksi join transaksi on 
                                transaksi.id_transaksi = detail_transaksi.id_transaksi join member on member.id_member = transaksi.id_member 
                                join admin on admin.id_admin = transaksi.id_admin join paket on paket.id_paket = detail_transaksi.id_paket where id_detail_transaksi like '%$cari%' or nama_member like '%$cari%' or jenis like '%$cari%' or tgl like '%$cari%' or status like '%$cari%' or dibayar like '%$cari%' order by id_detail_transaksi desc");
                            }else{
                                //jika tidak ada keyword pencarian
                                $query_dashboard= mysqli_query($koneksi,"select * from detail_transaksi join transaksi on transaksi.id_transaksi = detail_transaksi.id_transaksi join member on member.id_member = transaksi.id_member join admin on admin.id_admin = transaksi.id_admin join paket on paket.id_paket = detail_transaksi.id_paket where status like '%baru%' order by id_detail_transaksi desc");
                            }
                            while($data_dashboard= mysqli_fetch_array($query_dashboard)) { ?>
                                <tr>
                                    <td><?php echo $data_dashboard["nama_member"]; ?></td>
                                    <td><?php echo $data_dashboard["jenis"]; ?></td>
                                    <td><?php echo $data_dashboard["qty"].$data_dashboard["satuan"]; ?></td>
                                    <td><?php echo $data_dashboard["tgl"]; ?></td>
                                    <td><?php echo $data_dashboard["batas_waktu"]; ?></td>
                                    <td><?php echo $data_dashboard["status"]; ?></td>
                                    <td><?php echo $data_dashboard["dibayar"]; ?></td>
                                    <td><?php echo number_format($data_dashboard["qty"] * $data_dashboard["harga"]);?></td>
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