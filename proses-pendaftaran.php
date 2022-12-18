<?php 
    
    include("config.php");

    if (isset($_POST["daftar"])) {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $agama = $_POST["agama"];
        $sekolah_asal = $_POST["sekolah_asal"];

        $query = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: ./index.php?status=sukses");
        } else {
            header("Location: ./index.php?status=gagal");
        }
    }
    else {
        header("HTTP/1.0 403 Forbidden");
    }
?>