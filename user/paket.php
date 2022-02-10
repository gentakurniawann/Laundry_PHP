<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_paket.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
    ?>

    <div class="container my-5">
        <section class="cari">
            <div class="text-center container mb-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1>Paket Laundry</h1>
                <form method="POST" action="paket.php" class="d-flex">
                        <input class="form-control me-2" type="search" name="cari"
                        placeholder="Search" aria-label="Search">
                        <button class="btn btn-search" type="submit">Search</button>
                </form>
            </div>
            </div>
        </section>
        <!-- paket -->
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <?php
                include "koneksi.php";
                if (isset($_POST['cari'])) {
                    $cari = $_POST['cari'];
                    $query_paket = mysqli_query($koneksi, "select * from paket where id_paket = '$cari' or jenis like '%$cari%' ");
                }
                else{
                    $query_paket = mysqli_query($koneksi, "select * from paket");
                }
                while($data_paket = mysqli_fetch_array($query_paket)){
            ?>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h3 class="my-0 fw-normal"><?=$data_paket['jenis']?></h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title pricing-card-title"><?=$data_paket['harga']?><small class="text-muted fw-light">/<?=$data_paket['satuan']?></small></h4>
                        <a href="beli_paket.php?id_paket=<?=$data_paket['id_paket']?>"><button type="button" class="w-100 btn btn-lg btn-buy">Buy</button></a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>