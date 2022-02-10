<?php
    if ($_POST) {
        $id_admin= $_POST['id_admin'];
        $nama_admin= $_POST['nama_admin'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        include "koneksi.php";
        if (empty ($password)) {
            $update= mysqli_query ($koneksi, "update admin set nama_admin='".$nama_admin."', username='".$username."' where id_admin='".$id_admin."' ") or die (mysqli_error($koneksi));
            if($update){
                echo "<script> alert ('Sukses Update Profile'); location.href='data_admin.php' ; </script>";
            }else{
                echo "<script> alert ('Gagal Update Profile'); location.href='data_admin.php' ; </script>";
            }
        }else {
            $update= mysqli_query ($koneksi, "update admin set nama_admin='".$nama_admin."', username='".$username."', password='".md5($password)."' where id_admin='".$id_admin."' ") or die (mysqli_error($koneksi));
            if ($update) {
                echo "<script> alert ('Sukses Update Profile'); location.href='data_admin.php' ; </script>";  
            }else{
                echo "<script> alert ('Gagal Update Profile'); location.href='data_admin.php' ; </script>";
            }
        }
    }
?>