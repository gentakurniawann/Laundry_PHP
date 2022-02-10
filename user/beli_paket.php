<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_beli_paket.css">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_detail_paket = mysqli_query($koneksi, "SELECT * FROM paket where id_paket = '".$_GET['id_paket']."'");
        $data_paket = mysqli_fetch_array($query_detail_paket);
    ?>
    <div class="container">
        <div class="content ">
            <div class="card mb-4 rounded-3 shadow-sm">
                <form action="insert_cart.php?" method="POST">
                    <input type="hidden" name="id_paket" value="<?=$data_paket['id_paket']?>">
                    <div class="card-header py-3">
                        <h3 class="my-0 text-center"><?=$data_paket['jenis']?></h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title pricing-card-title text-center"><?=$data_paket['harga']?><small class="text-muted fw-light">/<?=$data_paket['satuan']?></small></h4>
                        <label for="jumlah_beli" class="form-label">Jumlah :</label>
                        <input class="form-control mb-2" type="number" name="jumlah_beli" value="1">
                        <button type="submit" class="w-100 btn btn-lg btn-buy">buy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>