<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Admin | ModalinAja</title>
    <link href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #1f1c2c, #928dab);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .register-box {
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
        <div class="register-box glass-effect p-5 rounded">
            <h4 class="text-white text-center mb-4">Tambah Akun Admin</h4>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label text-white">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required />
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>
                <button type="submit" name="register" class="btn btn-success w-100">Tambah Akun</button>
                <div class="text-center mt-3">
                    <a href="login.php" class="text-white">Kembali ke Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
include('../koneksi.php');

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Cek apakah username sudah ada
    $cek = mysqli_query($db, "SELECT * FROM tb_login WHERE username = '$username'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username sudah terdaftar!'); window.location.href='register.php';</script>";
    } else {
        $insert = mysqli_query($db, "INSERT INTO tb_login (username, password) VALUES ('$username', '$password')");
        if ($insert) {
            echo "<script>alert('Admin baru berhasil ditambahkan'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan admin'); window.location.href='register.php';</script>";
        }
    }
}
?>
