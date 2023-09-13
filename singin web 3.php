<!-- signin.php -->
<?php
// Ambil data dari formulir sign-in
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi sederhana (ini hanya contoh, gunakan database untuk validasi yang lebih aman)
if ($username === 'user@example.com' && $password === 'password') {
    // Sign-in berhasil, arahkan ke halaman selamat datang
    header('Location: web 3.html');
    exit;
} else {
    // Sign-in gagal, tampilkan pesan kesalahan
    echo 'Sign-in gagal. Periksa email dan password Anda.';
}
?>