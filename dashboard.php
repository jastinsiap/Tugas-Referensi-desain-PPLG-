<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-[#fdfcfb]">
    <nav class="flex justify-between items-center px-12 py-6">
        <h1 class="text-2xl font-bold text-[#2d334a]">The Bloom Café.</h1>
        <div class="flex items-center gap-6">
            <span class="text-gray-600">Halo, <b><?php echo $_SESSION['user']; ?></b></span>
            <a href="logout.php" class="bg-red-50 text-red-500 px-6 py-2 rounded-full font-medium">Keluar</a>
        </div>
    </nav>

    <main class="px-12 py-10">
        <div class="bg-[#2d334a] rounded-[40px] p-12 text-white mb-12 flex justify-between items-center">
            <div>
                <h2 class="text-4xl font-bold mb-4">Promo Spesial Hari Ini ✨</h2>
                <p class="text-gray-300">Dapatkan diskon 30% untuk Latte setiap pembelian sebelum jam 10 pagi.</p>
            </div>
            <button class="bg-[#ffd803] text-[#2d334a] px-8 py-3 rounded-full font-bold">Klaim Promo</button>
        </div>

        <h3 class="text-2xl font-semibold mb-8">Menu Favorit</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card Menu -->
            <div class="bg-white p-6 rounded-[30px] shadow-sm border border-gray-50 hover:shadow-md transition">
                <div class="h-48 bg-gray-200 rounded-[20px] mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1541167760496-162955ed8a9f?w=500" class="w-full h-full object-cover">
                </div>
                <h4 class="text-xl font-bold mb-1 text-[#2d334a]">Classic Iced Latte</h4>
                <p class="text-gray-400 mb-4">Espresso, susu segar, dan gula aren.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold">Rp 28.000</span>
                    <button class="bg-gray-100 p-3 rounded-xl hover:bg-[#ffd803] transition">+</button>
                </div>
            </div>
            
            <!-- Tambahkan card lain di sini -->
        </div>
    </main>
</body>
</html>