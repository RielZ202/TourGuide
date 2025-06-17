<?php
$conn = new mysqli("localhost", "root", "", "guidetour");
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Cek apakah email ada dan password lama cocok
    $sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($old_password, $row['password'])) {
        // Password lama cocok, update dengan hash password baru
        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update = "UPDATE users SET password='$new_hashed_password' WHERE email='$email'";
        
        if ($conn->query($update) === TRUE) {
            $message = "Password berhasil diubah!";
        } else {
            $message = "Gagal mengubah password.";
        }
    } else {
        $message = "Password lama salah.";
    }
} else {
    $message = "Email tidak ditemukan.";
}

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="./css/forgotpassword.css">
</head>
<body>
<div class="login-container">
    <h2>Forgot Password</h2>
    <p>Enter your Gmail, old password, and new password:</p>

    <?php if (!empty($message)): ?>
        <div style="color: red;"><?= $message ?></div>
    <?php endif; ?>

    <form class="login-form" method="POST" action="">
        <input type="email" name="email" class="login-input" placeholder="Your Gmail" required>
        <input type="password" name="old_password" class="login-input" placeholder="Old Password" required>
        <input type="password" name="new_password" class="login-input" placeholder="New Password" required>
        <button type="submit">UPDATE PASSWORD</button>
        <p class="signin">Back to <a href="form_login.php">Login</a></p>
    </form>
</div>
</body>
</html>
