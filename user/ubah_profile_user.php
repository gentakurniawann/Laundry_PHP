<?php
    if ($_POST) {
        $id_member= $_POST['id_member'];
        $nama_member= $_POST['nama_member'];
        $alamat= $_POST['alamat'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $tlp= $_POST['tlp'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        include "koneksi.php";
        if (empty ($password)) {
            $update= mysqli_query ($koneksi, "update member set nama_member='".$nama_member."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."', username='".$username."' where id_member='".$id_member."' ") or die (mysqli_error($koneksi));
            if($update){
                echo "<script> alert ('Sukses Update Profile'); location.href='inedx.php' ; </script>";
            }else{
                echo "<script> alert ('Gagal Update Profile'); location.href='index.php' ; </script>";
            }
        }else {
            $update= mysqli_query ($koneksi, "pdate member set nama_member='".$nama_member."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."', username='".$username."', password='".md5($password)."' where id_admin='".$id_admin."' ") or die (mysqli_error($koneksi));
            if ($update) {
                echo "<script> alert ('Sukses Update Profile'); location.href='index.php' ; </script>";  
            }else{
                echo "<script> alert ('Gagal Update Profile'); location.href='index.php' ; </script>";
            }
        }
    }
?>