<?php
    session_start();
    if($_SESSION['status_login'] != true) {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_navbar.css">
    <style>
      @media all and (min-width: 992px) {
	.navbar .dropdown-menu-end{ right:0; left: auto;  }
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}	
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <span class="navbar-brand" href="dashboard.php">LaundryKu</span>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_member.php">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_paket.php">Paket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_transaksi.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_detail.php">Laporan</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> <i class="far fa-user-circle fa-2x"></i> </a>
		        <ul class="dropdown-menu dropdown-menu-end fade-down">
			        <li><a class="dropdown-item" href="profile_admin.php"> Profile</a></li>
			        <li><a class="dropdown-item" href="logout.php"> Logout </a></li>
		        </ul>
		      </li>
        </ul>
        </div>
    </div>
    </nav>
</body>
</html>