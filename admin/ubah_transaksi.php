<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet_tambah.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
        include "koneksi.php";
        $qry_get_transaksi=mysqli_query($koneksi, "select * from transaksi where id_transaksi ='".$_GET['id_transaksi']."'");
        $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
    <!-- form -->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./images/transaksi-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Ubah Status</h3>
                <form method="POST" action="proses_ubah_transaksi.php">
                    <input type="hidden" name="id_transaksi" value="<?=$dt_transaksi ['id_transaksi'] ?>">
                    <div class="mb-4">
                        <!-- Satuan -->
                        <div class="mb-2">
                            <label for="status" class="form-label">Satuan Paket :</label>
                            <?php
                                $arr_status=array('baru'=>'Baru','proses'=>'Proses', 'selesai'=>'Selesai', 'diambil'=>'Diambil');
                            ?>
                            <select name="status" class="form-control form" required>
                                <option></option>
                                <?php foreach ($arr_status as $key_status => $val_status):
                                    if($key_status==$dt_transaksi['status']){
                                        $selek="selected";
                                    } else {
                                        $selek="";
                                    }?>
                                    <option value="<?=$key_status?>"<?=$selek?>><?=$val_status?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn">Ubah Status</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>