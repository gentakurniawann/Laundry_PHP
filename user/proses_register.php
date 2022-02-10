<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $tlp= $_POST['tlp'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    include "koneksi.php";
    $insert=mysqli_query($koneksi,"insert into member (nama_member, alamat, jenis_kelamin, tlp, username, password) value ('".$nama_member."','".$alamat."','".$jenis_kelamin."', '".$tlp."', '".$username."', '".md5($password)."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses Menambahkan Member');location.href='login.php';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Member');location.href='login.php';</script>";
    }
}
?>