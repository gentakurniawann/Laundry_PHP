<?php
    if ($_GET['id_admin']) {
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi, "delete from admin where id_admin='".$_GET['id_admin']."'");
        if ($qry_hapus) {
            echo "<script>alert ('Sukses hapus Admin'); location.href='data_admin.php';</script>";
        }else {
            echo "<script>alert ('Gagal hapus Admin'); location.href='data_admin.php';</script>";
        }
    }
?> 