<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_login.css">
</head>
<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-5 mb-3">
                <img src="./images/login-01.png" class="image-fluid" alt="image" width="300px" height="300px"/>
            </div>
            <div class="col-md-6">
            <h3 class="mb-2 text-center">Login</h3>
                <form method="POST" action="proses_login.php">
                    <div class="mb-4">
                        <!-- username -->
                        <div class="mb-2">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <!-- password -->
                        <div class="mb-2">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control form" name="Password" placeholder="*******" required>
                        </div>
                    </div>
                    <button type="submit" class="btn mb-2">Login</button>
                    <p class="mb-4">Don't have an account <a href="register.php">Register here</a></p>
                </form>
                <p class="text-center">All Right Reserved © 2021</p>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>