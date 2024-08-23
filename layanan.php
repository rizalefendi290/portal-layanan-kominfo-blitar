<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="font-poppins">
    <?php require 'components/header.php' ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Laman Layanan Dinas Komunikasi dan Informasi
            Kabupaten Blitar</h1>

        <nav class="mb-4">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-gray-700">
                <li class="inline-flex items-center">
                    <a href="home.html" class="text-gray-600 hover:text-gray-900">Home</a>
                </li>
                <li class="inline-flex items-center">
                    <span class="mx-2 text-gray-500">></span>
                    <span>Layanan</span>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
            <div class="relative">
                <!-- Button trigger -->
                <button data-popover-target="popover-layanan-pemerintah" data-popover-trigger="click" type="button" data-popover-placement="bottom"
                    class="text-gray-700 hover:text-gray-900 text-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg">
                    <img src="image/layanan-pemerintah.png" alt="Layanan Pemerintah" class="mx-auto mb-4 w-20 h-20">
                    Layanan Pemerintah
                </button>

                <!-- Popover content -->
                <div data-popover id="popover-layanan-pemerintah" role="tooltip" data-popper-placement="bottom"
                    class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                    <div
                        class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Layanan Pemerintah</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>Informasi tentang layanan yang disediakan oleh pemerintah. Klik untuk detail lebih lanjut.
                        </p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
            </div>
            <div class="relative">
                <!-- Button trigger -->
                <button data-popover-target="popover-layanan-non-pemerintah" data-popover-trigger="click" type="button" data-popover-placement="bottom"
                    class="text-gray-700 hover:text-gray-900 text-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg">
                    <img src="image/layanan-non-pemerintah.png" alt="Layanan Pemerintah" class="mx-auto mb-4 w-20 h-20">
                    Layanan Non Pemerintah
                </button>

                <!-- Popover content -->
                <div data-popover id="popover-layanan-non-pemerintah" role="tooltip"
                    class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                    <div
                        class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Layanan Non Pemerintah</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>Informasi tentang layanan yang disediakan oleh pemerintah. Klik untuk detail lebih lanjut.
                        </p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
            </div>
        </div>
</body>

</html>