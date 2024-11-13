<?php
include 'db.php';

// Ambil data dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$absensi = $_POST['absensi'];
$tanggal = $_POST['tanggal'];

// Proses upload file foto
$foto = null;
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    $foto = $upload_dir . basename($_FILES['foto']['name']);
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
        $foto = null; // Jika gagal upload, tetap null
    }
}

// Simpan data ke database
$query = "INSERT INTO presensi (nama, nis, absensi, tanggal, foto) 
          VALUES ('$nama', '$nis', '$absensi', '$tanggal', '$foto')";

if ($conn->query($query)) {
    echo "Data berhasil disimpan. <a href='index.php'>Kembali</a>";
} else {
    echo "Gagal menyimpan data: " . $conn->error;
}
?>
