<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="stylesheet_pembelian.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>History Pemesanan Paket</h3>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Pemesanan </th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Tanggal Pembayaran</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Status</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    $query_transaksi = mysqli_query($koneksi, "SELECT * FROM transaksi 
                    where id_member = '".$_SESSION['id_member']."' ORDER BY id_transaksi DESC");
                    $no=0;
                    while($data_transaksi=mysqli_fetch_array($query_transaksi)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_transaksi['tgl']?></td>
                        <td><?=$data_transaksi['batas_waktu']?></td>
                        <td><?=$data_transaksi['tgl_bayar']?></td>
                        <td>
                            <ol>
                            <?php
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN paket p ON p.id_paket = d.id_paket WHERE
                                            id_transaksi = '".$data_transaksi['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".$data_detail['jenis']."</li>";
                            }
                            ?>
                            </ol>
                        </td>
                        <td><?=$data_transaksi['status']?></td> 
                        <?php
                        if ($data_transaksi['dibayar']=="dibayar") {
                            echo "<td>";
                            echo "<label class='alert alert-success'>
                                Sudah Dibayar </label>";
                            echo "</td>";
                            echo "<td></td>";
                        }
                        else{
                            echo "<td><label class='alert alert-danger'>Belum Dibayar<br></label></td>";
                            echo "<td><a href='bayar.php?id_transaksi=".$data_transaksi['id_transaksi']."' class='btn btn-bayar'
                            onclick='return confirm('Apakah anda yakin ingin membayar?')'>Bayar</a></td>";
                        }
                        ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>