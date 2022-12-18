<?php

    require("phpfpdf/fpdf.php");

    include "config.php";

    $pdf = new FPDF("l", "mm", "A4");

    $pdf->AddPage();
    $pdf->SetFont("Times", "B", 16);
    $pdf->Cell(272, 7, "DAFTAR SISWA BARU SMK CODING", 0, 1, "C");
    $pdf->Cell(272, 7, "", 0, 1, "C");

    $query = "SELECT * FROM calon_siswa";
    
    $result = mysqli_query($connection,  $query);

    if ($result) {
        $pdf->SetFont("Times", "B", 12);
            
        $pdf->Cell(16, 6, "ID", 1, 0, "C");
        $pdf->Cell(64, 6, "Nama", 1, 0, "C");
        $pdf->Cell(64, 6, "Alamat",  1,  0,  "C");
        $pdf->Cell(32, 6, "Jenis Kelamin", 1, 0, "C");
        $pdf->Cell(32, 6, "Agama", 1, 0, "C");
        $pdf->Cell(64, 6, "Sekolah Asal", 1, 1, "C");

        $pdf->SetFont("Times", "", 12);
        while($siswa = mysqli_fetch_array($result)) {
            
            $pdf->Cell(16, 6, $siswa["id"], 1, 0, "C");
            $pdf->Cell(64, 6, $siswa["nama"], 1, 0, "C");
            $pdf->Cell(64, 6, $siswa["alamat"],  1,  0,  "C");
            $pdf->Cell(32, 6, $siswa["jenis_kelamin"], 1, 0, "C");
            $pdf->Cell(32, 6, $siswa["agama"], 1, 0, "C");
            $pdf->Cell(64, 6, $siswa["sekolah_asal"], 1, 1, "C");

        }
    }
    else {
        die("Gagal mengakses basis data...");
    }
// // Memberikan space kebawah agar tidak terlalu rapat
// $pdf->Cell(10, 7, "", 0, 1);

// $pdf->SetFont("Arial", "B", 10);
// $pdf->Cell(20, 6, "NIM", 1, 0);
// $pdf->Cell(85, 6, "NAMA MAHASISWA", 1, 0);
// $pdf->Cell(27, 6, "NO HP", 1, 0);
// $pdf->Cell(25, 6, "TANGGAL LHR", 1, 1);

// $pdf->SetFont("Arial", "", 10);

// include "koneksi.php";
// $mahasiswa = mysqli_query($connect,  "select * from mahasiswa");
// while ($row = mysqli_fetch_array($mahasiswa)){
//     $pdf->Cell(20, 6, $row["nim"], 1, 0);
//     $pdf->Cell(85, 6, $row["nama_lengkap"], 1, 0);
//     $pdf->Cell(27, 6, $row["no_hp"], 1, 0);
//     $pdf->Cell(25, 6, $row["tanggal_lahir"], 1, 1); 
// }

$pdf->Output();
?>