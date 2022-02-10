<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "koneksi.php";
    $qry_login=mysqli_query($koneksi, "select * from admin where username = '".$username."' and password ='".md5($password)."' ");
    if(mysqli_num_rows($qry_login)>0){
        echo "<script>alert('login berhasil'); location.href='dashboard.php';</script>";
        $dt_login=mysqli_fetch_array($qry_login);
        session_start();
        $_SESSION["id_admin"]=$dt_login["id_admin"];
        $_SESSION["nama_admin"]=$dt_login["nama_admin"];
        $_SESSION["status_login"]=true;
        header("location: dashboard.php");
    }else{
        echo "<script>alert('username dan password tidak benar'); location.href='index.php';</script>";
    }
    
?>