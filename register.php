<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ForlatVOKASI</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	</head>
    <body style="background-color: skyblue;">
        <!--ambil data dari navbar-->
        <?php include('navbar.php'); ?>

        <?php
        // ambil database dari config.php
        include 'config.php';

        // menghilangkan tampilan pesan kesalahan //
        error_reporting(0);

        // memulai sesi atau mengaktifkan sesi yang sudah ada //
        session_start();

        if(isset($_SESSION['username'])) {
            header("Location: index.php");
        }

        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $cpassword = md5($_POST['cpassword']);

            if($password == $cpassword) {
                $sql = "SELECT * FROM users WHERE email ='$email'";
                $result = mysqli_query($conn, $sql);

                if(!$result->num_rows > 0) {
                    $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                    $result = mysqli_query($conn, $sql);

                    if($result) {
                        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";
                    } else {
                        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                    }
                } else {
                    echo "<script>alert('Woops! Email sudah terdaftar.')</script>";
                }
            } else {
                echo "<script>alert('Password Tidak Sesuai')</script>";
            }
        }
        ?>

        <div class="container">
            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="text-center">Halaman Registrasi</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap Anda" name="username" value="<?php echo $username; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda" name="password" value="<?php echo $_POST['password']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">KOnfirmasi Password</label>
                                    <input type="password" class="form-control" id="nama" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>">
                                </div>
                                <div>
                                    <p>Anda sudah punya akun? <a href="login.php">Login</a></p>
                                </div>

                                <div class="text-center mt-5">
                                    <button name="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>