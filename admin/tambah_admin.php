<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_tambah.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
    ?>
    <!-- form -->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./images/admin-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Tambah Admin</h3>
                <form method="POST" action="proses_tambah_admin.php">
                    <div class="mb-4">
                        <!-- Nama -->
                        <div class="mb-2">
                            <label for="nama_admin" class="form-label">Nama :</label>
                            <input type="text" class="form-control form" name="nama_admin" placeholder="Masukkan Nama" required>
                        </div>
                        <!-- username -->
                        <div class="mb-2">
                            <label for="username" class="form-label">username :</label>
                            <input type="text" class="form-control form" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <!-- password -->
                        <div class="mb-2">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control form" name="password" placeholder="*******" required>
                        </div>
                    </div>
                    <button type="submit" class="btn">Add Admin</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>