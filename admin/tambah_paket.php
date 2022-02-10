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
    ?>
    <!-- form -->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./images/paket-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Tambah Paket</h3>
                <form method="POST" action="proses_tambah_paket.php">
                    <div class="mb-4">
                        <!-- Jenis -->
                        <div class="mb-2">
                            <label for="jenis" class="form-label">Jenis Paket :</label>
                            <input type="text" class="form-control form" name="jenis" placeholder="Masukkan Jenis" required>
                        </div>
                        <!-- Nama -->
                        <div class="mb-2">
                            <label for="satuan" class="form-label">Satuan Paket :</label>
                            <?php
                                $arr_satuan=array('kg'=>'Kilogram','pcs'=>'Pieces');
                            ?>
                            <select name="satuan" class="form-control form" required>
                                <option></option>
                                <?php foreach ($arr_satuan as $key_satuan => $val_satuan):?>
                                    <option value="<?=$key_satuan?>"><?=$val_satuan?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- Harga -->
                        <div class="mb-2">
                            <label for="harga" class="form-label">Harga :</label>
                            <input type="number" class="form-control form" name="harga" placeholder="Masukkan Harga" required>
                        </div>
                    </div>
                    <button type="submit" class="btn">Add Paket</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>