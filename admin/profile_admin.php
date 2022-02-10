<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_profile.css">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_detail_admin = mysqli_query($koneksi, "SELECT * FROM admin where id_admin = '".$_SESSION['id_admin']."'");
        $data_admin = mysqli_fetch_array($query_detail_admin);
    ?>

    <div class="container content">
        <div class="card-body align-self-center my-5">
        <h3 class="text-center">Profile</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 align-self-center">
                <img src="./images/profilkosong.png" alt="image" class="img-profil"width="80%">
            </div>
            <div class="col-md-8">
                <form action="ubah_profile_admin.php?" method="POST">
                    <input type="hidden" name="id_admin" value="<?=$data_admin['id_admin']?>">
                    <!-- nama petugas -->
                    <div class="mb-3">
                         <label class="form-label">Nama Admin :</label>
                        <input type="text" name="nama_admin"  class="form-control" value="<?=$data_admin['nama_admin']?>" required>
                    </div>
                    <!-- username petugas -->
                    <div class="mb-3">
                        <label class="form-label">Username :</label>
                        <input type="text" name="username"  class="form-control" value="<?=$data_admin['username']?>" required>
                    </div>
                    <!-- password-->
                    <div class="mb-3">
                        <label class="form-label">Password :</label>
                        <input type="password" name="password"  class="form-control" value="" placeholder="******">
                    </div>
                    <button type = "submit" class = "btn">Save Profile</button>
                </form>
            </div>
        </div>
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>