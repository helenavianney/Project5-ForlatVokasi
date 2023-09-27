<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ForlatVOKASI</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	</head>
    <body>
        <!--ambil data dari navbar-->
        <?php include('navbar.php'); ?>
        <?php
        // memulai atau memulai sesi dalam PHP //
        session_start();

        // jika variabel sesi 'username' belum diinput (artinya pengguna belum login), maka akan diarahkan kembali ke index.php //
        if (!isset($_SESSION['username'])) {
            header("Location: index.php");
        }
        ?>

        <section>
            <div class="container mt-5">
                <!--pesan selamat datang dengan diambil dari variabel sesi 'username', dan pesan tersebut akan ditampilkan seagai heading 1-->
                <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>

                <div class="input-group">
                    <a href="logout.php" class="btn btn-primary">Log Out</a>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="mt-5 text-center">Data Diri Anggota ForlatVokasi</h2>
                <form id="registrationForm" class="mt-3">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pimpinan : </label>
                        <input type="text" class="form-control" id="namapimpinan" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama LPK : </label>
                        <input type="text" class="form-control" id="namalpk" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorAnggota" class="form-label">No HP : </label>
                        <input type="number" class="form-control" id="nohp" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat : </label>
                        <input type="text" class="form-control" id="Alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalBergabung" class="form-label">Tanggal Bergabung : </label>
                        <input type="date" class="form-control" id="tanggalBergabung" required>
                    </div>

                    <button type="button" class="btn btn-primary" onclick="buatKartuAnggota()">Simpan</button>
                </form>
            </div>
        </section>

        <section>
            <div class="container mt-5">
                <div id="kartuAnggota" class="card d-block m-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kartu Anggota ForlatVokasi</h5>
                        <p class="card-text">Nama Pimpinan : <span id="outputnamapimpinan"></span></p>
                        <p class="card-text">Nama LPK : <span id="outputnamalpk"></span></p>
                        <p class="card-text">No HP : <span id="outputnohp"></span></p>
                        <p class="card-text">Alamat : <span id="outputAlamat"></span></p>
                        <p class="card-text">Tanggal Bergabung : <span id="outputtanggalBergabung"></span></p>
                        <button type="button" class="btn btn-primary" onclick="cetakkartu()">Cetak</button>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // jika tombol simpan di klik //
            function buatKartuAnggota() {
                var namapimpinan = document.getElementById("namapimpinan").value;
                var namalpk = document.getElementById("namalpk").value;
                var nohp = document.getElementById("nohp").value;
                var Alamat = document.getElementById("Alamat").value;
                var tanggalBergabung = document.getElementById("tanggalBergabung").value;

                document.getElementById("outputnamapimpinan").textContent = namapimpinan;
                document.getElementById("outputnamalpk").textContent = namalpk;
                document.getElementById("outputnohp").textContent = nohp;
                document.getElementById("outputAlamat").textContent = Alamat;
                document.getElementById("outputtanggalBergabung").textContent = tanggalBergabung;

                document.getElementById("registrationForm").style.display = "none";
                document.getElementById("kartuAnggota").classList.remove("d-none");
            }

            //untuk cetak print di windows
            function cetakkartu() {
                window.print();
            }
        </script>
    </body>
</html>