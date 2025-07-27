<?php
include('../koneksi.php');

$nama_pembiayaan = $_POST['nama_pembiayaan'];
$jumlah_bulan = $_POST['jumlah_bulan'];
$total_biaya = $_POST['total_biaya'];

// Hitung bunga 2,5% dari total biaya
$bunga = 0.025 * $total_biaya;

// Hitung biaya perbulan dengan bunga
$biaya_perbulan = ($total_biaya + $bunga) / $jumlah_bulan;

if (isset($_POST['submit'])) {

    // CEK NAMA SUDAH ADA ATAU BELUM
    $cek = mysqli_query($db, "SELECT * FROM tb_sewa WHERE nama_pembiayaan = '$nama_pembiayaan'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Nama pembiayaan \"$nama_pembiayaan\" sudah ada! Silakan gunakan nama lain.'); 
              location.replace('../index.php?p=pembiayaan-input');</script>";
        exit;
    }

    // Jika nama belum ada, lanjutkan simpan
    $query = "INSERT INTO tb_sewa (nama_pembiayaan, jumlah_bulan, total_biaya, biaya_perbulan) 
              VALUES ('$nama_pembiayaan', '$jumlah_bulan', '$total_biaya', '$biaya_perbulan')";
    
    if (mysqli_query($db, $query)) {
        $last_id = mysqli_insert_id($db); // Mendapatkan ID terakhir
        echo "<script>alert('Data berhasil Ditambah. ID Pembiayaan: $last_id'); 
              location.replace('../index.php?p=pembiayaan')</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}
?>
