<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Lihat Session</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
  <h3 class="text-info">🔐 Data Session</h3>
  <?php
    if (isset($_SESSION["var_session_1"]) && isset($_SESSION["var_session_2"])) {
        echo "<p>{$_SESSION['var_session_1']}</p>";
        echo "<p>{$_SESSION['var_session_2']}</p>";
    } else {
        echo "<div class='alert alert-warning'>Session kosong!</div>";
    }
  ?>
  <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
