<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "presensi"; // Nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangani pengunggahan foto
if (isset($_FILES['foto'])) {
    $fotoName = $_FILES['foto']['name'];
    $fotoTmpName = $_FILES['foto']['tmp_name'];
    $fotoPath = 'uploads/' . basename($fotoName);

    // Memindahkan foto ke direktori uploads
    if (move_uploaded_file($fotoTmpName, $fotoPath)) {
        $nama = $_POST['nama'];
        $presensi = $_POST['presensi'];
        $absensi = $_POST['absensi'];
        $tanggal = date('Y-m-d H:i:s');

        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO presensi (nama, presensi, absensi, foto) 
                VALUES ('$nama', '$presensi', '$absensi', '$fotoPath')";

        if ($conn->query($sql) === TRUE) {
            echo "Presensi berhasil disimpan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah foto.";
    }
}

$conn->close();
?>
