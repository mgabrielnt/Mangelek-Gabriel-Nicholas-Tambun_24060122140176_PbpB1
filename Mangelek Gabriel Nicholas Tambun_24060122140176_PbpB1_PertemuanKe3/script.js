document.getElementById('kelas').addEventListener('change', function() {
    var kelas = this.value;
    if (kelas == 'X' || kelas == 'XI') {
        document.getElementById('ekstrakurikuler').style.display = 'block';
    } else {
        document.getElementById('ekstrakurikuler').style.display = 'none';
    }
});

// Trigger perubahan saat halaman dimuat ulang
document.getElementById('kelas').dispatchEvent(new Event('change'));
