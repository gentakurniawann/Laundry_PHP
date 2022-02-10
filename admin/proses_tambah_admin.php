<?php
if($_POST){
    $nama_admin=$_POST['nama_admin'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    include "koneksi.php";
    $insert=mysqli_query($koneksi,"insert into admin (nama_admin, username, password) value ('".$nama_admin."','".$username."', '".md5($password)."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses Menambahkan Admin');location.href='data_admin.php';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Admin');location.href='data_admin.php';</script>";
    }
}
?>