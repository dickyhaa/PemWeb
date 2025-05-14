<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Session Dihapus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
  <h3 class="text-danger">❌ Session berhasil dihapus</h3>
  <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
