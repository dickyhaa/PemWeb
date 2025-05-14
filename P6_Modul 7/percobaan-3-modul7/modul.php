<?php
// Mendapatkan parameter 'page' dari URL, default ke 'home' jika tidak ada
$halaman = $_GET["page"] ?? "home";

// Menampilkan konten berdasarkan parameter 'page'
if ($halaman === "home") {
    include "depan.php"; // Pastikan file depan.php ada
} elseif ($halaman === "profil") {
    include "profil.php"; // Pastikan file profil.php ada
} elseif ($halaman === "galeri") {
    include "gallery.php"; // Pastikan file gallery.php ada
} else {
    // Gunakan file salah.php untuk menampilkan pesan error
    // Meneruskan ID halaman yang tidak ditemukan
    $_GET["id"] = $halaman;
    include "salah.php";
}
?>