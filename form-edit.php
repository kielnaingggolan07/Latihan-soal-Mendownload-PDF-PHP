<?php

    include("config.php");

    if(!isset($_GET["id"])){
        header("Location: ./list-siswa.php");
    }

    $id = $_GET["id"];

    $query = "SELECT * FROM calon_siswa WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $siswa = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) < 1 ) {
        die("data tidak ditemukan...");
    }
    else {
        $jenis_kelamin = $siswa["jenis_kelamin"]; 
        $agama = $siswa["agama"];
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    </head>

    <body>
        <div class="container " style="height: 100vh;">
            <div class="row align-items-center h-100 d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <form action="./proses-edit.php" method="POST">
                            <p class="fs-3 fw-bold mx-0 my-2">Formulir Edit Siswa</p>
                            <input type="hidden" name="id" value="<?php echo $siswa["id"] ?>">
                            <div class="form-group row d-flex my-1">
                                <label for="input-nama" class="col-md-2 col-form-label fs-5">Nama</label>
                                <div class="col-md-10 my-auto">
                                    <input type="text" class="form-control border-dark rounded-1" name="nama" placeholder="nama" value="<?php echo $siswa["nama"]; ?>">
                                </div>
                            </div>
                            <div class="form-group row d-flex my-1">
                                <label for="input-alamat" class="col-md-2 col-form-label fs-5">Alamat</label>
                                <div class="col-md-10 my-auto">
                                    <textarea class="form-control border-dark rounded-1" name="alamat" rows="3" cols="50" placeholder="alamat empat tinggal" ><?php echo $siswa["alamat"]; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row d-flex my-1">
                                <label for="input-alamat" class="col-md-4 col-form-label fs-5">Jenis Kelamin</label>
                                <div class="col-md-8 my-auto d-flex">
                                    <div class="form-check col-md-6">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio-kelamin-lakilaki" value="laki-laki" 
                                            <?php 
                                                echo ($jenis_kelamin == "laki-laki") ? "checked" : ""
                                            ?>
                                        >
                                        <label class="form-check-label" for="radio-kelamin-lakilaki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check col-md-6">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio-kelamin-perempuan" value="perempuan"
                                            <?php 
                                                echo ($jenis_kelamin == "perempuan") ? "checked" : ""
                                            ?>
                                        >
                                        <label class="form-check-label" for="radio-kelamin-perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row d-flex my-1">
                                <label for="input-alamat" class="col-md-2 col-form-label fs-5">Agama</label>
                                <div class="col-md-10 my-auto">
                                    <select class="form-select border-dark rounded-1" name="agama" aria-label="pilih agama">
                                        <option selected>Pilih agama</option>
                                        <option value="Islam" <?php echo ($agama == "Islam") ? "selected": "" ?>>Islam</option>
                                        <option value="Katolik" <?php echo ($agama == "Katolik") ? "selected": "" ?>>Katolik</option>
                                        <option value="Kristen" <?php echo ($agama == "Kristen") ? "selected": "" ?>>Kristen</option>
                                        <option value="Hindu" <?php echo ($agama == "Hindu") ? "selected": "" ?>>Hindu</option>
                                        <option value="Buddha" <?php echo ($agama == "Buddha") ? "selected": "" ?>>Buddha</option>
                                        <option value="Konghucu" <?php echo ($agama == "Konghucu") ? "selected": "" ?>>Konghucu</option>
                                        <option value="Lain" <?php echo ($agama == "Lain") ? "selected": "" ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row d-flex my-1">
                                <label for="input-alamat" class="col-md-2 col-form-label fs-5">Sekolah Asal</label>
                                <div class="col-md-10 my-auto">
                                    <input type="text" class="form-control border-dark rounded-1" name="sekolah_asal" value="<?php echo $siswa["sekolah_asal"] ?>" placeholder="nama sekolah">
                                </div>
                            </div>
                            <input type="submit" class="mt-3 col-md-3 border-dark rounded-1 fw-bold" name="simpan" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>