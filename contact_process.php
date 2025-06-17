<?php
// Tampilkan error jika ada (untuk debug)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Pastikan request menggunakan POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $host = 'localhost';
    $user = 'root';  // Sesuaikan jika berbeda
    $pass = '';
    $db   = 'guidetour';

    $conn = new mysqli($host, $user, $pass, $db);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari form
    $name    = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
    $email   = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $subject = mysqli_real_escape_string($conn, $_POST['subject'] ?? '');
    $message = mysqli_real_escape_string($conn, $_POST['message'] ?? '');

    // Validasi sederhana
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        header("Location: contact.php?status=error");
        exit;
    }

    // Simpan ke database
    $sql = "INSERT INTO messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=error");
    }

    $conn->close();
} else {
    // Jika bukan request POST, redirect ke halaman form
    header("Location: contact.php");
    exit;
}
