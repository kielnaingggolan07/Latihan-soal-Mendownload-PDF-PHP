<?php 
    include("./config.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List Siswa | SMK Coding</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container " style="height: 100vh;">
            <div class="row align-items-center h-100 d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <p class="fs-3 fw-bold mx-0 my-2">Siswa yang sudah mendaftar</p>
                        <a href="./form-daftar.php" class="fs-5 fw-bold my-2">Tambah baru</a>
                        <a href="./laporan-pdf.php" class="fs-5 fw-bold my-2">Unduh Data PDF</a>
                        <table class="table my-4">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle" scope="col">ID</th>
                                    <th class="text-center align-middle" scope="col">Nama</th>
                                    <th class="text-center align-middle" scope="col">Alamat</th>
                                    <th class="text-center align-middle" scope="col">Jenis Kelamin</th>
                                    <th class="text-center align-middle" scope="col">Agama</th>
                                    <th class="text-center align-middle" scope="col">Sekolah Asal</th>
                                    <th class="text-center align-middle" scope="col">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM calon_siswa";
                                    
                                    $result = mysqli_query($connection, $query);
                                    
                                    while($siswa = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$siswa["id"]."</td>";
                                        echo "<td>".$siswa["nama"]."</td>";
                                        echo "<td>".$siswa["alamat"]."</td>";
                                        echo "<td>".$siswa["jenis_kelamin"]."</td>";
                                        echo "<td>".$siswa["agama"]."</td>";
                                        echo "<td>".$siswa["sekolah_asal"]."</td>";
                                        echo "<td>";
                                        echo "<a href=\"./form-edit.php?id=" . $siswa["id"] . "\">Edit</a> | ";
                                        echo "<a href=\"./hapus.php?id=". $siswa["id"] . "\">Hapus</a>";
                                        echo "</td>";
                                        echo "<tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                        <p  class="fs-6 fw-bold m-0">Total: <?php echo mysqli_num_rows($result) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>