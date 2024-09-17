<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi NIS
    $nis = $_POST['nis'];
    if (empty($nis) || !ctype_digit($nis) || strlen($nis) != 10) {
        $errors['nis'] = "NIS harus berupa angka dan terdiri dari 10 digit.";
    }

    // Validasi Nama
    if (empty($_POST['nama'])) {
        $errors['nama'] = "Nama harus diisi.";
    }

    // Validasi Jenis Kelamin
    if (!isset($_POST['gender'])) {
        $errors['gender'] = "Jenis kelamin harus dipilih.";
    }

    // Validasi Kelas dan Ekstrakurikuler
    if (isset($_POST['kelas'])) {
        $kelas = $_POST['kelas'];
        if ($kelas == "X" || $kelas == "XI") {
            if (!isset($_POST['ekskul']) || count($_POST['ekskul']) < 1 || count($_POST['ekskul']) > 3) {
                $errors['ekskul'] = "Pilih minimal 1 dan maksimal 3 ekstrakurikuler.";
            }
        } elseif ($kelas == "XII" && isset($_POST['ekskul'])) {
            $errors['ekskul'] = "Siswa kelas XII tidak boleh mengikuti kegiatan ekstrakurikuler.";
        }
    } else {
        $errors['kelas'] = "Kelas harus dipilih.";
    }

    // Jika tidak ada error, lakukan pengolahan data
    if (empty($errors)) {
        echo "Form berhasil disubmit!";
        // Lakukan proses lain seperti menyimpan ke database
    }
}
?>