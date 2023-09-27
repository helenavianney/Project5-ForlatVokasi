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

        <div class="container mt-5">
            <div class="title text-center centered">

                <h2 class="mb-3">Selamat Datang di Website FORLATVOKASI</h2>
                <h4 class="mb-4">Sebagai Wadah Informasi, Komunikasi, Representasi, Konsultasi dan Fasilitasi <br>
                Lembaga Penyelengara Pendidikan dan Pelatihan Vokasi Seluruh Indonesia.</h4>

                <div class="row">
                    <div class="col-4"><img src="foto1.jpeg" class="img-thumbnail" alt="" width="300px" height="150px"></div>
                    <div class="col-4"><img src="foto2.jpg" class="img-thumbnail" alt="" width="300px" height="150px"></div>
                    <div class="col-4"><img src="foto3.jpg" class="img-thumbnail" alt="" width="300px" height="150px"></div>
                </div>

                <div class="mt-5">
                    <a href="register.php" class="btn btn-primary px-3 mx-2">Daftar Sekarang</a>
                    <a href="login.php" class="btn btn-primary px-3 mx-2">Masuk</a>
                </div>

            </div>
        </div>
        
    </body>
</html>