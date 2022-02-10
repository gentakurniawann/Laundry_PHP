<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet_tambah.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
        include "koneksi.php";
        $qry_get_admin=mysqli_query($koneksi, "select * from admin where id_admin ='".$_GET['id_admin']."'");
        $dt_admin=mysqli_fetch_array($qry_get_admin);
    ?>

    <!-- form -->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./images/admin-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Ubah Admin</h3>
                <form method="POST" action="proses_ubah_admin.php">
                    <input type="hidden" name="id_admin" value="<?=$dt_admin ['id_admin'] ?>">
                    <div class="mb-4">
                        <!-- Nama -->
                        <div class="mb-2">
                            <label for="nama_admin" class="form-label">Nama :</label>
                            <input type="text" class="form-control form" name="nama_admin" value="<?=$dt_admin ['nama_admin']?>" placeholder="Masukkan Nama" required>
                        </div>
                        <!-- Username -->
                        <div class="mb-2">
                            <label for="username" class="form-label">Username :</label>
                            <input type="text" class="form-control form" name="username" value="<?=$dt_admin ['username']?>" placeholder="Masukkan Username" required>
                        </div>
                        <!-- password -->
                        <div class="mb-2">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control form" name="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <button type="submit" class="btn">Ubah Admin</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>