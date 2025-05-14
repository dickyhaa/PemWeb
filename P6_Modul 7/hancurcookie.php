<?php
setcookie("nama", "", time() - 3600, "/");
setcookie("nama_teman", "", time() - 3600, "/");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cookie Dihapus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
  <h3 class="text-danger">❌ Cookie telah dihapus</h3>
  <p>Cookie <strong>nama</strong> dan <strong>nama_teman</strong> sudah tidak tersedia lagi.</p>
  <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
