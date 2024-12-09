<?php
session_start();
require '../DB/Dbregist.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_phone = $_POST['email_or_phone'];
    $password = $_POST['password'];

    // Cek login sebagai admin
    $query_admin = "SELECT * FROM admin WHERE email_or_phone = ?";
    $stmt_admin = $conn->prepare($query_admin);
    $stmt_admin->bind_param("s", $email_or_phone);
    $stmt_admin->execute();
    $result_admin = $stmt_admin->get_result();

    if ($result_admin->num_rows > 0) {
        // Admin ditemukan, periksa password
        $admin = $result_admin->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['role'] = 'admin';
            $_SESSION['user_id'] = $admin['id'];
            header("Location: admin-dashboard.php");
            exit;
        } else {
            $error = "Password salah untuk admin!";
        }
    } else {
        // Cek login sebagai user
        $query_user = "SELECT * FROM users WHERE email_or_phone = ?";
        $stmt_user = $conn->prepare($query_user);
        $stmt_user->bind_param("s", $email_or_phone);
        $stmt_user->execute();
        $result_user = $stmt_user->get_result();

        if ($result_user->num_rows > 0) {
            // User ditemukan, periksa password
            $user = $result_user->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['role'] = 'user';
                $_SESSION['user_id'] = $user['id'];
                header("Location: ../Final.php");
                exit;
            } else {
                $error = "Password salah untuk user!";
            }
        } else {
            $error = "Email/nomor HP tidak terdaftar!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="class-page">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <h1 class="text-center mb-4">Login</h1>
            <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" name="email_or_phone" class="form-control" placeholder="Nomor HP atau email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Log In</button>
            </form>
            <p class="mt-3 text-center">Belum memiliki akun? <a href="register.php">Daftar dulu</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
