<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-poppins bg-gray-100">

    <header>
        <nav class="bg-gray-800 text-white py-4">
            <div class="container mx-auto flex items-center justify-between px-4">
                <img src="image/logo.png" width="80" height="80" alt="Logo" class="mr-4">
                <h1 class="text-2xl font-bold mx-5">Portal</h1>
                <button class="lg:hidden text-white" id="navbar-toggler">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="navbarNavAltMarkup" class="hidden lg:flex flex-grow justify-between items-center">
                    <div class="flex space-x-4">
                        <a class="hover:text-gray-300" href="home.php">Home</a>
                        <a class="hover:text-gray-300" href="layanan.php">Layanan</a>
                        <a class="hover:text-gray-300" href="kontak.php">Kontak</a>
                        <a class="hover:text-gray-300" href="OPD.php">OPD</a>
                    </div>
                    <form class="flex space-x-2">
                        <input class="form-input rounded-l-md" type="search" placeholder="Search">
                        <button class="bg-green-500 text-white px-4 py-2 rounded-r-md" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="login.php">
                            <button class="bg-green-500 text-white px-4 py-2 rounded-md ml-2">Login</button>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="my-8">
        <h1 class="text-3xl text-center font-bold mb-4">Selamat Datang di Layanan Kami</h1>
        <div class="container mx-auto text-center mb-8">
            <img src="image/diskominfo.jpeg" class="w-full h-80 object-cover" alt="Diskominfo">
        </div>

        <section class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold mb-4">Tentang Kami</h1>
                <p class="text-lg leading-relaxed">Kementerian Komunikasi dan Informatika (Kominfo) adalah lembaga
                    pemerintah di Indonesia yang bertanggung jawab atas pengembangan, pengelolaan, dan pengawasan sektor
                    komunikasi dan informatika. Tugas utamanya meliputi penyebaran informasi, pengembangan infrastruktur
                    telekomunikasi, pengaturan media, serta peningkatan literasi digital. Kominfo juga berperan dalam
                    mendukung transformasi digital dan menjaga keamanan cyber di tanah air.</p>
            </div>
            <!-- Carousel -->
            <div class="relative mb-8 max-w-full overflow-hidden">
                <div class="slider flex transition-transform duration-500 ease-in-out">
                    <div class="w-full flex-shrink-0">
                        <img src="image/kantor1.jpg" class="w-full h-64 object-cover" alt="Kantor 1">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="image/kantor2.jpg" class="w-full h-64 object-cover" alt="Kantor 2">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="image/kantor3.jpg" class="w-full h-64 object-cover" alt="Kantor 3">
                    </div>
                </div>
                <div class="absolute top-1/2 left-0 transform -translate-y-1/2 flex justify-between w-full px-4">
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full" id="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full" id="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <ul class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <li class="w-2.5 h-2.5 bg-gray-500 rounded-full"></li>
                    <li class="w-2.5 h-2.5 bg-gray-500 rounded-full"></li>
                    <li class="w-2.5 h-2.5 bg-gray-500 rounded-full"></li>
                </ul>
            </div>
            <div class="text-center">
                <h1 class="text-2xl font-bold mb-4">Layanan Kami</h1>
                <p class="text-lg mb-8">Kementerian Dinas Komunikasi dan Informatika (Diskominfo) berkomitmen untuk
                    memberikan pelayanan terbaik kepada masyarakat. Berikut adalah layanan yang tersedia</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-2">Pengaduan Layanan</h2>
                        <p class="mb-4">Masyarakat dapat mengajukan keluhan terkait layanan telekomunikasi melalui
                            platform resmi kami.</p>
                        <a href="kontak.html">
                            <img src="image/Customerservis.jpeg" class="w-full h-48 object-cover" alt="Pengaduan Layanan">
                        </a>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-2">Pendaftaran Nomor Telepon</h2>
                        <p class="mb-4">Kami menyediakan informasi mengenai registrasi nomor telepon dan kewajiban
                            pengguna untuk mendukung keamanan komunikasi.</p>
                        <img src="image/pendaftaran nomertlp.jpg" class="w-full h-48 object-cover" alt="Pendaftaran Nomor Telepon">
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-2">Layanan Informasi Publik</h2>
                        <p class="mb-4">Akses mudah untuk mendapatkan informasi yang transparan dan akuntabel sesuai
                            dengan UU Keterbukaan Informasi.</p>
                        <img src="image/layanan publik.jpg" class="w-full h-48 object-cover" alt="Layanan Informasi Publik">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between px-4">
            <div class="mb-4 lg:mb-0">
                <h3 class="text-lg font-bold mb-2">Copyright © 2024 KOMINFO</h3>
                <p>Pusat Data dan Sarana Informatika, All rights reserved</p>
                <div class="mt-4 flex space-x-4">
                    <img src="image/logo.png" class="h-12" alt="Logo">
                    <img src="image/logoblitar.png" class="h-8" alt="Blitar Logo">
                </div>
            </div>
            <div>
                <p class="text-lg font-bold mb-2">About</p>
                <p>Dinas Komunikasi dan Informasi menyediakan berbagai macam layanan untuk memberikan informasi dan
                    membantu rakyat Indonesia.</p>
                <div class="mt-4 flex space-x-4">
                    <a href="https://www.youtube.com/channel/UC6673kwtPekbPTJgRsTSizQ" class="text-white"><i
                            class="fab fa-youtube fa-2x"></i></a>
                    <a href="https://id-id.facebook.com/Kemkominfo/" class="text-white"><i
                            class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://x.com/kemkominfo" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://www.instagram.com/kemenkominfo/?hl=id" class="text-white"><i
                            class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script>
    let list = document.querySelector('.slider');
    let items = document.querySelectorAll('.slider .flex-shrink-0');
    let dots = document.querySelectorAll('.dots li');
    let prev = document.getElementById('prev');
    let next = document.getElementById('next');
    let active = 0;
    let lengthItems = items.length - 1;

    next.onclick = function() {
        active = (active + 1 > lengthItems) ? 0 : active + 1;
        reloadSlider();
    }
    prev.onclick = function() {
        active = (active - 1 < 0) ? lengthItems : active - 1;
        reloadSlider();
    }
    let refreshSlider = setInterval(() => {
        next.click()
    }, 3000);

    function reloadSlider() {
        let checkLeft = items[active].offsetLeft;
        list.style.transform = `translateX(-${checkLeft}px)`;
        document.querySelector('.dots .active').classList.remove('active');
        dots[active].classList.add('active');
        clearInterval(refreshSlider);
        refreshSlider = setInterval(() => {
            next.click()
        }, 3000);
    }
    dots.forEach((li, key) => {
        li.addEventListener('click', function() {
            active = key;
            reloadSlider();
        })
    })
    </script>

</body>

</html>
