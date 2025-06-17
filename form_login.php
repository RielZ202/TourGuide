<?php
session_start();

$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Koneksi ke database
        $conn = new mysqli("localhost", "root", "", "guidetour");

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['username'] = $user['username']; // pastikan kolom 'name' ada
                header("Location: index.php");
                exit;
            } else {
                $loginError = "Password salah";
            }
        } else {
            $loginError = "Email tidak ditemukan";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
      <h2>Login</h2>
      <p>Enter your Gmail and password to login:</p>

      <?php if (!empty($loginError)) : ?>
      <div class="error-message" style="color: red;"><?= htmlspecialchars($loginError) ?></div>
      <?php endif; ?>

      <form class="login-form" method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <input type="email" name="email" class="login-input" placeholder="E-mail (Gmail only)" required>
        <input type="password" name="password" class="login-input" placeholder="Password" required>
        <a href="form_forgotpassword.php" class="forgot">Forgot your password?</a>
        <button type="submit">LOGIN</button>
        <p class="signup">Don't have an account? <a href="form_signup.php">Sign up</a></p>
      </form>
    </div>
</body>
</html>
