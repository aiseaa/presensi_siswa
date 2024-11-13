document.getElementById('presensiForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah form untuk di-submit secara default

    const formData = new FormData(this);

    fetch('submit_presensi.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Menampilkan pesan dari server
    })
    .catch(error => {
        alert('Terjadi kesalahan: ' + error);
    });
});
