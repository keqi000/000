<!-- login.php -->
<?php
// Ambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi sederhana (ini hanya contoh, gunakan database untuk validasi yang lebih aman)
if ($username === 'user' && $password === 'password') {
    // Autentikasi berhasil, arahkan ke halaman selamat datang
    header('Location: web 3.html');
    exit;
} else {
    // Autentikasi gagal, tampilkan pesan kesalahan
    echo 'Login gagal. Periksa username dan password Anda.';
}
?>
