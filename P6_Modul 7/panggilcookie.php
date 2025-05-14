<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Lihat Cookie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
  <h3 class="text-info">🍪 Data Cookie</h3>
  <?php
    if (isset($_COOKIE["nama"]) && isset($_COOKIE["nama_teman"])) {
        echo "<p>Nama Anda: <strong>{$_COOKIE['nama']}</strong></p>";
        echo "<p>Nama Teman Anda: <strong>{$_COOKIE['nama_teman']}</strong></p>";
    } else {
        echo "<div class='alert alert-warning'>Cookie belum disetel!</div>";
    }
  ?>
  <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
