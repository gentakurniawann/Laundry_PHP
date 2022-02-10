<?php
    if ($_POST) {
        $id_paket= $_POST['id_paket'];
        $jenis= $_POST['jenis'];
        $satuan= $_POST['satuan'];
        $harga= $_POST['harga'];

        include "koneksi.php";
        $update= mysqli_query ($koneksi, "update paket set jenis='".$jenis."', satuan='".$satuan."', harga='".$harga."' where id_paket='".$id_paket."' ") or die (mysqli_error($koneksi));
        if($update){    
            echo "<script> alert ('Sukses update paket'); location.href='data_paket.php' ; </script>";
        }else{
            echo "<script> alert ('Gagal update paket'); location.href='data_paket.php' ; </script>";
        }
    }
?>