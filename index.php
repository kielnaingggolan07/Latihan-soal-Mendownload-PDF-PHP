<!DOCTYPE html>
<html>
    <head>
        <title>SMK Coding</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container " style="height: 100vh;">
            <div class="row align-items-center h-100 d-flex justify-content-center">
                <div class="col-md-6 text-center">
                    <div>
                        <p class="fs-3 m-1">Pendaftaran Siswa Baru</p>
                        <p class="fs-1 fw-bold m-1">SMK Coding</p>
                        <p class="fs-5 fw-bold mt-4">Menu</p>
                        <p class="fs-5 my-1"><a href="./form-daftar.php">daftar baru</a></p>
                        <p class="fs-5 my-1"><a href="./list-siswa.php">pendaftar</a></p>
                        
                        <?php if(isset($_GET["status"])): ?>
                            <p class="fs-6 mt-3">
                                <?php
                                    if($_GET["status"] == "sukses"){
                                        echo "Pendaftaran siswa baru berhasil!";
                                    } else {
                                        echo "Pendaftaran gagal!";
                                    }
                                ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>