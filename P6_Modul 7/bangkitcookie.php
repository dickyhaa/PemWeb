<?php
$nama_cookie = "nama_teman";
$nilai_cookie = "Dicky Haikal";
setcookie($nama_cookie, $nilai_cookie, time() + (3600), "/"); // 1 jam
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Disetel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-success shadow rounded text-center">
            <h4 class="alert-heading">✅ Cookie Berhasil Disetel!</h4>
            <p>Cookie <strong><?= $nama_cookie ?></strong> dengan nilai <strong><?= $nilai_cookie ?></strong> telah disimpan.</p>
            <hr>
            <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>
</html>
