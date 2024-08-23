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
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
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
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>