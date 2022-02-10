<?php
    if ($_GET['id_transaksi']) {
        include "koneksi.php";
        $tgl_bayar = date('Y-m-d');
        $sudah_dibayar="dibayar";
        $qry_bayar=mysqli_query($koneksi, "update transaksi set tgl_bayar = '".$tgl_bayar."', dibayar = '".$sudah_dibayar."' where id_transaksi= '".$_GET['id_transaksi']."'");
        if ($qry_bayar) {
            echo "<script>alert ('Sukses Melakukan Pembayaran'); location.href='pembelian.php';</script>";
        }else {
            echo "<script>alert ('Gagal Melakukan Pembayaran'); location.href='pembelian.php';</script>";
        }
    }
?> 