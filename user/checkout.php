<?php
    session_start();
    include "koneksi.php";
    $query_detail_paket = mysqli_query($koneksi, "SELECT * FROM paket");
    $data_paket = mysqli_fetch_array($query_detail_paket);
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {
        $tgl = date('Y-m-d');
        $tgl_bayar;
        $status = "baru";
        $dibayar= "belum_dibayar";
        $lama_pengerjaan = 3;
        $batas_waktu = date('Y-m-d', mktime(0,0,0,date('m'),date('d')+$lama_pengerjaan,date('Y')));
        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_member, id_admin, tgl, batas_waktu, status, dibayar)
        VALUES ('".$_SESSION['id_member']."', '".$_SESSION['id_admin']."', '".$tgl."', '".$batas_waktu."', '".$status."', '".$dibayar."' )");

        if ($query_transaksi) {
            $id = mysqli_insert_id($koneksi);
            foreach ($cart as $key => $value) {
                mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_paket, qty)
                VALUES ('".$id."', '".$value['id_paket']."', '".$value['qty']."')");
            }

            unset($_SESSION['cart']);
            echo "<script>alert('Anda Berhasil Memesan Laundry');location.href='pembelian.php'</script>";
        }
        else{
            echo "<script>alert('Gagal Memesan Laundry');</script>";
        }
    }
?>