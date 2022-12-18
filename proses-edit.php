<?php 
    
    include("config.php");

    if (isset($_POST["simpan"])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $agama = $_POST["agama"];
        $sekolah_asal = $_POST["sekolah_asal"];

        $query = "UPDATE calon_siswa AS cs SET cs.nama = '$nama', cs.alamat = '$alamat', cs.jenis_kelamin = '$jenis_kelamin', cs.agama = '$agama', cs.sekolah_asal = '$sekolah_asal' WHERE cs.id = $id";

        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: ./list-siswa.php");
        } 
        else {
            die("Gagal menyimpan perubahan...");
        }
    }
    else {
        header("HTTP/1.0 403 Forbidden");
    }
?>