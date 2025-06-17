<?php
session_start();

$signupError = '';
$signupSuccess = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'guidetour');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Validasi email Gmail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !str_ends_with($email, '@gmail.com')) {
        $signupError = "Email harus berupa akun Gmail yang valid.";
    } else {
        // Cek apakah email sudah digunakan
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $signupError = "Email sudah digunakan, silakan gunakan email lain.";
        } else {
            // Simpan data ke database (gunakan password_hash untuk keamanan)
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

            if ($conn->query($insert) === TRUE) {
                $signupSuccess = "Akun berhasil dibuat! Silakan login.";
            } else {
                $signupError = "Gagal menyimpan data: " . $conn->error;
            }
        }
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-container">
        <h2>Sign up</h2>
        <p>Please fill in the information below:</p>

        <?php if (!empty($signupError)) : ?>
        <div class="error-message" style="color: red;"><?= htmlspecialchars($signupError) ?></div>
        <?php endif; ?>

        <?php if (!empty($signupSuccess)) : ?>
        <div class="success-message" style="color: green;"><?= htmlspecialchars($signupSuccess) ?></div>
        <?php endif; ?>

        <form id="signupForm" class="signup-form" method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">CREATE ACCOUNT</button>
            <p class="signin">Already have an account? <a href="form_login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
