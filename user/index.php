<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link  rel="stylesheet" href="stylesheet_home.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <!-- banner -->
    <section class="banner">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-5 align-self-center">
                    <h1 class="mb-3">Selamat datang di website LaundryKu</h1>
                    <p class="mb-3">Kami menyediakan jasa laundry dengan harga yang murah dan hasil yang maksimal.
                    Budayakan malas mencuci karena mencuci adalah tugas kami.</p>
                    <a href="#paket_terlaris"><button class="btn btn-banner">Lihat Paket</button></a>
                </div>
                <div class="col-md-7">
                    <img src="./images/home-bannerr-01.png" alt="image" width="100%%"/> 
                </div>
            </div>
        </div>
    </section>
    <!-- kelebihan -->
    <section class="kelebihan">
        <div class="container text-center my-4 py-4">
            <h2 class="mb-3">Kelebihan</h2>
            <div class="row pt-4 text-center">
                <div class="col">
                    <i class="fas fa-money-bill-wave fa-2x mb-3"></i>
                    <h5>Harga Terjangkau</h5>
                </div>
                <div class="col">
                    <i class="fas fa-clock fa-2x mb-3"></i>
                    <h5>Pengerjaan Tepat Waktu</h5>
                </div>
                <div class="col">
                    <i class="fas fa-spray-can fa-2x mb-3"></i>
                    <h5>Wangi Tahan Lama</h5>
                </div>
                <div class="col">
                    <i class="fas fa-tshirt fa-2x mb-3"></i>
                    <h5>Hasil Memuaskan</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- tentang -->
    <section class="tentang">
        <div class="container my-4 py-4">
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    <img src="./images/tentang-01.png" alt="image" width="90%"/> 
                </div>
                <div class="col-sm-5">
                    <h2>Tentang</h2>
                    <p>
                        Website ini merupakan website LaundryKu yang merupakan penyedia jasa cuci pakaian yang dibuat pada tahun 2021.
                        Website ini dibuat untuk memudahkan para pelanggan dalam memesan jasa yang kami tawarkan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Paket Terlaris -->
    <section class="paket-terlaris" id="paket_terlaris">
        <div class="container my-4 py-4">
            <h2 class="text-center mb-3">Paket Terlaris</h2>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <?php
                    include "koneksi.php";
                    $query_paket = mysqli_query($koneksi, "select * from paket order by rand() limit 3");
                    while($data_paket = mysqli_fetch_array($query_paket)){
                ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h3 class="my-0 fw-normal"><?=$data_paket['jenis']?></h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pricing-card-title"><?=$data_paket['harga']?><small class="text-muted fw-light">/<?=$data_paket['satuan']?></small></h1>
                            <a href="beli_paket.php?id_paket=<?=$data_paket['id_paket']?>"><button type="button" class="w-100 btn btn-lg btn-buy">buy</button></a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="testimoni">
        <div class="container my-4 py-4 container-testi">
            <h2 class="text-center mb-3">Testimoni</h2>
            <div class="row">
                <div class="col ml-2">
                    <div class="card card-testi text-center">
                        <img src="./images/profilkosong.png" alt="image"> 
                        <div class="card-body">
                            <h5>Genta</h5>
                            <p class="card-text">"Wanginya Tahan Lama"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col ml-2">
                    <div class="card card-testi text-center">
                        <img src="./images/profilkosong.png" alt="image"> 
                        <div class="card-body">
                            <h5>Genta</h5>
                            <p class="card-text">"Hasilnya Memuaskan" 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card card-testi text-center">
                        <img src="./images/profilkosong.png" alt="image"> 
                        <div class="card-body">
                            <h5>Genta</h5>
                            <p class="card-text">"Harganya sangat terjangkau" 
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <section class="kontak">
        <div class="container my-4 py-4">
            <h2 class="text-center mb-3">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="nama">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Email">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="No.Telp">
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-kirimpesan">Kirim Pesan</button>
            </div>
        </div>
    </section>
    <?php
        include "footer.php";
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>