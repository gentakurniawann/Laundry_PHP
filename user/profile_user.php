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
        $query_detail_member = mysqli_query($koneksi, "SELECT * FROM member where id_member = '".$_SESSION['id_member']."'");
        $data_member = mysqli_fetch_array($query_detail_member);
    ?>

    <div class="container content">
        <div class="card-body align-self-center my-5">
        <h3 class="text-center">Profile</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 align-self-center">
                <img src="./images/profilkosong.png" alt="image" class="img-profil"width="80%">
            </div>
            <div class="col-md-8">
                <form action="ubah_profile_user.php?" method="POST">
                    <input type="hidden" name="id_member" value="<?=$data_member['id_member']?>">
                    <!-- nama-->
                    <div class="mb-3">
                         <label class="form-label">Nama :</label>
                        <input type="text" name="nama_member"  class="form-control" value="<?=$data_member['nama_member']?>" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- gender -->
                            <div class="mb-2">
                                <label for="jenis_kelamin" class="form-label">Gender :</label>
                                <?php
                                    $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                                ?>
                                <select name="jenis_kelamin" class="form-select">
                                    <option></option>
                                    <?php foreach ($arr_gender as $key_gender => $val_gender):
                                        if($key_gender==$data_member['jenis_kelamin']){
                                            $selek="selected";
                                        } else {
                                            $selek="";
                                        }?>
                                        <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <!-- no.telp -->
                            <div class="mb-2">
                                <label for="tlp" class="form-label">No.Telp :</label>
                                <input type="number" class="form-control form" name="tlp" value="<?=$data_member['tlp']?>" placeholder="Masukkan Nomor Telp" required>
                            </div>
                        </div>
                    </div>
                    <!-- alamat -->
                    <div class="mb-2">
                            <label for="alamat" class="form-label">Alamat :</label>
                            <textarea name="alamat" class="form-control textarea" rows="4" placeholder="Masukkan Alamat" required><?=$data_member['alamat']?></textarea>
                        </div>
                    <!-- username -->
                    <div class="mb-3">
                        <label class="form-label">Username :</label>
                        <input type="text" name="username"  class="form-control" value="<?=$data_member['username']?>" required>
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