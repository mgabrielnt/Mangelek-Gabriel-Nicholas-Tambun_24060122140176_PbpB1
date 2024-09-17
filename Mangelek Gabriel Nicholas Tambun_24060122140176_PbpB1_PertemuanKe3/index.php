<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Data Siswa</h2>
        <form method="POST" action="process_form.php">
            <label for="nis">NIS:</label>
            <input type="text" id="nis" name="nis" value="<?php echo isset($_POST['nis']) ? htmlspecialchars($_POST['nis']) : ''; ?>">
            <span class="error"><?php echo isset($errors['nis']) ? $errors['nis'] : ''; ?></span>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">
            <span class="error"><?php echo isset($errors['nama']) ? $errors['nama'] : ''; ?></span>

            <label>Jenis Kelamin:</label>
            <input type="radio" name="gender" value="Laki-laki" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Laki-laki') echo 'checked'; ?>> Laki-laki
            <input type="radio" name="gender" value="Perempuan" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Perempuan') echo 'checked'; ?>> Perempuan
            <span class="error"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></span>

            <label for="kelas">Kelas:</label>
            <select name="kelas" id="kelas">
                <option value="X" <?php if(isset($_POST['kelas']) && $_POST['kelas'] == 'X') echo 'selected'; ?>>X</option>
                <option value="XI" <?php if(isset($_POST['kelas']) && $_POST['kelas'] == 'XI') echo 'selected'; ?>>XI</option>
                <option value="XII" <?php if(isset($_POST['kelas']) && $_POST['kelas'] == 'XII') echo 'selected'; ?>>XII</option>
            </select>
            <span class="error"><?php echo isset($errors['kelas']) ? $errors['kelas'] : ''; ?></span>

            <div id="ekstrakurikuler" style="display: none;">
                <label>Ekstrakurikuler:</label><br>
                <input type="checkbox" name="ekskul[]" value="Pramuka" <?php if(isset($_POST['ekskul']) && in_array('Pramuka', $_POST['ekskul'])) echo 'checked'; ?>> Pramuka<br>
                <input type="checkbox" name="ekskul[]" value="Paskibra" <?php if(isset($_POST['ekskul']) && in_array('Paskibra', $_POST['ekskul'])) echo 'checked'; ?>> Paskibra<br>
                <input type="checkbox" name="ekskul[]" value="Basket" <?php if(isset($_POST['ekskul']) && in_array('Basket', $_POST['ekskul'])) echo 'checked'; ?>> Basket<br>
                <input type="checkbox" name="ekskul[]" value="Futsal" <?php if(isset($_POST['ekskul']) && in_array('Futsal', $_POST['ekskul'])) echo 'checked'; ?>> Futsal<br>
                <input type="checkbox" name="ekskul[]" value="Karate" <?php if(isset($_POST['ekskul']) && in_array('Karate', $_POST['ekskul'])) echo 'checked'; ?>> Karate<br>
                <span class="error"><?php echo isset($errors['ekskul']) ? $errors['ekskul'] : ''; ?></span>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>

<script>
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
</script>