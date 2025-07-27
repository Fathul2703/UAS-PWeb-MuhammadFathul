<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ModalinAja</title>
    <link href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        body {
            background: linear-gradient(to right, #1f1c2c, #928dab);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-box {
            max-width: 400px;
            width: 100%;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-box glass-effect p-5 rounded">
            <h3 class="text-center text-white mb-4"><strong>ModalinAja</strong></h3>
            <h4 class="text-white text-center mb-4">Login Admin</h4>
            <form action="../proses/validasi.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label text-white">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required />
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <!-- Tambahan ini dipindahkan ke dalam login-box -->
            <div class="text-center text-white mt-4">
                <p>Tambah Akun? <a href="register.php" class="text-primary">Buat Sekarang</a></p>
            </div>
        </div>
    </div>
</body>
</html>
