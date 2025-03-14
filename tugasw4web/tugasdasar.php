<!DOCTYPE html>
<html>
<head>
    <title>Cek Umur</title>
</head>
<body>
    <h2>Form Cek Umur</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br>
        Umur: <input type="number" name="umur" required><br>
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = (int) $_POST['umur'];
        $status = ($umur >= 18) ? "Dewasa" : "Belum Dewasa";

        echo "<hr>";
        echo "<h3>Hasil:</h3>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Umur:</strong> $umur tahun</p>";
        echo "<p><strong>Status:</strong> $status</p>";
    }
    ?>
</body>
</html>
