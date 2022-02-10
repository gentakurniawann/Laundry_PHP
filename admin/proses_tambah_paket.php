<?php
if($_POST){
    $jenis=$_POST['jenis'];
    $satuan=$_POST['satuan'];
    $harga=$_POST['harga'];
    include "koneksi.php";
    $insert=mysqli_query($koneksi,"insert into paket (jenis, satuan, harga) value ('".$jenis."', '".$satuan."', '".$harga."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses Menambahkan Paket');location.href='data_paket.php';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Paket');location.href='data_paket.php';</script>";
    }
}
?>