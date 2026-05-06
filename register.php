<?php
include 'config.php';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#f8f5f2] flex items-center justify-center h-screen">
    <div class="bg-white p-10 rounded-3xl shadow-xl w-full max-w-md">
        <h2 class="text-3xl font-semibold text-[#2d334a] mb-2">Join the Club</h2>
        <p class="text-gray-400 mb-8">Nikmati kopi terbaik dengan akses eksklusif.</p>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" class="w-full p-4 mb-4 border border-gray-100 rounded-2xl bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#ffd803]" required>
            <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-100 rounded-2xl bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#ffd803]" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-4 mb-6 border border-gray-100 rounded-2xl bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#ffd803]" required>
            <button type="submit" name="register" class="w-full bg-[#2d334a] text-white p-4 rounded-2xl font-semibold hover:bg-[#272c40] transition">Daftar Sekarang</button>
        </form>
        <p class="mt-6 text-center text-gray-500">Sudah punya akun? <a href="login.php" class="text-[#ffd803] font-bold">Login</a></p>
    </div>
</body>
</html>