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
    <link rel="stylesheet" href="stylesheet_register.css">
</head>
<body>
    <!-- form -->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./images/member-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Register</h3>
                <form method="POST" action="proses_register.php">
                    <div class="mb-4">
                        <!-- Nama -->
                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama :</label>
                            <input type="text" class="form-control form" name="nama_member" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- gender -->
                                <div class="mb-2">
                                    <label for="jenis_kelamin" class="form-label">Gender :</label>
                                    <?php
                                        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                                    ?>
                                    <select name="jenis_kelamin" class="form-control form" required>
                                        <option></option>
                                        <?php foreach ($arr_gender as $key_gender => $val_gender):?>
                                            <option value="<?=$key_gender?>"><?=$val_gender?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <!-- no.telp -->
                                <div class="mb-2">
                                    <label for="tlp" class="form-label">No.Telp :</label>
                                    <input type="number" class="form-control form" name="tlp" placeholder="Masukkan Nomor Telp" required>
                                </div>
                            </div>
                        </div>
                        <!-- alamat -->
                        <div class="mb-2">
                            <label for="alamat" class="form-label">Alamat :</label>
                            <textarea name="alamat" class="form-control textarea" rows="4" placeholder="Masukkan Alamat" required></textarea>
                        </div>
                        <!-- username -->
                        <div class="mb-2">
                            <label for="tlp" class="form-label">Username :</label>
                            <input type="text" class="form-control form" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <!-- password -->
                        <div class="mb-2">
                            <label for="tlp" class="form-label">Password :</label>
                            <input type="password" class="form-control form" name="password" placeholder="******" required>
                        </div>
                    </div>
                    <button type="submit" class="btn mb-2">Register</button>
                    <p>Back to <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>