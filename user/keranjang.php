<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="stylesheet_keranjang.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container mb-5">
        <div class="card">
            <div class="card-header">
                <h3>Keranjang</h3>
            </div>
            <div class="card-body">
            <?php 
            if (@$_SESSION['cart'] == null) {
                echo "Keranjang kosong";
            }
            else {
            ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (@$_SESSION['cart'] as $key => $value) : ?>
                    <tr>
                        <td><?=($key+1)?></td>
                        <td><?=$value['jenis']?></td>
                        <td> <?php echo $value["harga"]; ?></td>
                        <td><?=$value['qty']?></td>
                        <td> <?php echo number_format($value["qty"] * $value["harga"], 2);?></td>
                        <td><a href="delete_keranjang.php?id=<?=$key?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><button class="btn btn-danger">Hapus</button></a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <a href="checkout.php"><button class="btn btn-checkout">checkout</button></a>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>