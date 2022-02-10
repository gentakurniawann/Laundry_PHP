<?php
    session_start();
    if ($_POST) {
        include "koneksi.php";

        $query_get_paket=mysqli_query($koneksi, "SELECT * FROM paket where id_paket = '".$_POST['id_paket']."'");
        $data_paket = mysqli_fetch_array($query_get_paket);

        $_SESSION['cart'][]=array(
            'id_paket' => $data_paket['id_paket'],
            'jenis' => $data_paket['jenis'],
            'harga' => $data_paket['harga'],
            'qty' => $_POST['jumlah_beli']
        );
    }
    header('location: keranjang.php');
?>