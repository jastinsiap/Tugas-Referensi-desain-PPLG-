<?php
session_start();
include 'config.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        $error = "Email atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-[#f8f5f2] flex items-center justify-center h-screen">
    <div class="bg-white p-10 rounded-3xl shadow-xl w-full max-w-md">
        <h2 class="text-3xl font-semibold text-[#2d334a] mb-2">Welcome Back</h2>
        <p class="text-gray-400 mb-8">Kopi Anda sudah menunggu.</p>
        <?php if(isset($error)) echo "<p class='text-red-500 mb-4'>$error</p>"; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-100 rounded-2xl bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#ffd803]" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-4 mb-6 border border-gray-100 rounded-2xl bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#ffd803]" required>
            <button type="submit" name="login" class="w-full bg-[#ffd803] text-[#2d334a] p-4 rounded-2xl font-bold hover:bg-[#eec602] transition">Masuk</button>
        </form>
        <p class="mt-6 text-center text-gray-500">Belum bergabung? <a href="register.php" class="text-[#2d334a] font-bold underline">Buat akun</a></p>
    </div>
</body>
</html>