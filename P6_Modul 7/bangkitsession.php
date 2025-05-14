<?php
session_start();
$_SESSION["var_session_1"] = "Dicky Haikal";
$_SESSION["var_session_2"] = "081234567890";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Session Disetel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
  <h3 class="text-success">✅ Session berhasil dibuat!</h3>
  <ul>
    <li><?= $_SESSION["var_session_1"]; ?></li>
    <li><?= $_SESSION["var_session_2"]; ?></li>
  </ul>
  <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
