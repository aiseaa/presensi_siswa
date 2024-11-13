<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absensi</title>
</head>
<body>
    <h1>Form Absensi Siswa</h1>
    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="nis">NIS:</label>
        <input type="text" name="nis" required><br><br>

        <label for="absensi">Status Kehadiran:</label>
        <select name="absensi" required>
            <option value="Hadir">Hadir</option>
            <option value="Tidak Hadir">Tidak Hadir</option>
        </select><br><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br><br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" accept="image/*"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
