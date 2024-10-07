<!doctype html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>RW 08</title>
</head>

<body>
    {{-- NAVBAR SECTION --}}
    <section>
        <nav class="w-full p-3 bg-secondary flex justify-between items-center">
            <div class="text-lg text-primary font-bold">
                <h1 class="mx-3">
                    <a class="text-2xl" href="#home">RW 08</a>
                </h1>
            </div>
            <ul class="text-primary text-lg font-bold  hidden lg:flex lg:gap-8">
                <li class="mx-2"><a href="#home">Kegunaan</a></li>
                <li class="mx-2"><a href="#kegunaan">Tata Cara</a></li>
                <li class="mx-2"><a href="#tatacara">Contact Us</a></li>
            </ul>
            <div class="hidden lg:flex gap-5">
                <button class="text-primary outline px-5 py-2 rounded-full font-bold text-lg bg-secondary"><a
                        href="/register">Register</a>
                </button>
                <button class="text-secondary outline px-9 py-2 rounded-full font-bold text-lg bg-primary"><a
                        href="/login">Login</a>
                </button>
            </div>
            <button class="lg:hidden block buttonToogle">
                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 50 50">
                    <path fill="currentColor" d="M10 12h30v4H10zm0 10h30v4H10zm0 10h30v4H10z" />
                </svg>
            </button>
        </nav>
        <div class="mobileMenu hidden lg:hidden">
            <ul class="text-primary text-base mx-3 font-bold gap-8">
                <li class="py-4 cursor-pointer hover:bg-primary hover:text-secondary ease-in duration-300">Kegunaan</li>
                <li class="py-4 cursor-pointer hover:bg-primary hover:text-secondary ease-in duration-300">Tata Cara
                </li>
                <li class="py-4 cursor-pointer hover:bg-primary hover:text-secondary ease-in duration-300">Contact Us
                </li>
            </ul>
            <div class="flex gap-5 mt-3 mx-2">
                <button class="text-secondary w-full mb-2 px-8 py-2 rounded-full font-bold text-base bg-primary">Login
                </button>
                <button
                    class="text-primary w-full outline mb-2 px-8 py-2 rounded-full font-bold text-sm bg-secondary">Register
                </button>
            </div>
        </div>
    </section>


    {{-- HERO SECTION --}}
    <section id="home" class="bg-primary w-full">
        <div class="container mx-auto text-center text-white h-screen flex items-center">
            <div class="mx-auto w-3/4 md:w-2/4">
                <h3 class=" text-4xl lg:text-6xl font-bold text-center mb-5">Surat Menyurat RW 08</h3>
                <p class="text-gray-500 mb-7">Layanan Surat Menyurat Online Khusus RW 08 Perumtas 3 Grabagan Tulangan
                    Sidoarjo, tanpa harus kerumah Ketua RW atau RT Melayani segala keperluan surat menyurat ataupun
                    Surat Pengantar Terimakasih ~</p>
                <a href="#login" class="bg-red-500 text-white py-2 px-5 rounded-sm
              ">Buat Surat
                    Sekarang</a>
            </div>
        </div>
    </section>
    <!-- kegunaan -->
    <section id="kegunaan" class="bg-thirdy py-20">
        <div class="w-11/12 md:container mx-auto">
            <h3 class="text-4xl font-bold text-center mb-5">Kegunaan Surat Menyurat</h3>
            <p class="text-gray-500 mb-5 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ipsa,corrupti.</p>
            <div class="grid grod-cols-1 md:grid-cols-3 gap-6">
                <!-- kegunaaan 1 -->
                <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
                    <img src="https://placehold.co/100" alt="">
                    <div>
                        <h4 class="text-xl font-bold mb-3">Surat Pengantar</h4>
                        <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam
                            earum
                            inventore optio at aut.
                        </p>
                        <a href="" class="hover:text-gray-600">Buat Surat</a>
                    </div>
                </div>
                <!-- kegunaaan 2 -->
                <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
                    <img src="https://placehold.co/100" alt="">
                    <div>
                        <h4 class="text-xl font-bold mb-3">Surat Domisili</h4>
                        <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam
                            earum
                            inventore optio at aut.
                        </p>
                        <a href="" class="hover:text-gray-600">Buat Surat</a>
                    </div>
                </div>
                <!-- kegunaaan 3 -->
                <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
                    <img src="https://placehold.co/100" alt="">
                    <div>
                        <h4 class="text-xl font-bold mb-3">Surat Keterangan</h4>
                        <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam
                            earum
                            inventore optio at aut.
                        </p>
                        <a href="" class="hover:text-gray-600">Buat Surat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tata cara -->
    <section id="tatacara" class="py-20 bg-white">
        <h3 class="text-4xl font-bold text-center mb-5">Tata Cara Pengurusan Surat Menyurat</h3>
        <p class="text-gray-500 mb-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
            omnis?
        </p>
        <div class="grid grid-cols-2 md:grid-cols-4 w-11/12 md:container mx-auto gap-6">
            <!-- tatacara 1 -->
            <div class="shadow-lg">
                <img src="https://placehold.co/600x400" class="w-full" alt="">
                <div class="py-3 px-5">
                    <h4 class="text-center font-bold">Siapkan KTP / KK </h4>
                </div>
            </div>
            <!-- tatacara 2 -->
            <div class="shadow-lg">
                <img src="https://placehold.co/600x400" class="w-full" alt="">
                <div class="py-3 px-5">
                    <h4 class="text-center font-bold">isi Formulir </h4>
                </div>
            </div>
            <!-- tatacara 3 -->
            <div class="shadow-lg">
                <img src="https://placehold.co/600x400" class="w-full" alt="">
                <div class="py-3 px-5">
                    <h4 class="text-center font-bold">Tunggu Proses </h4>
                </div>
            </div>
            <!-- tatacara 4 -->
            <div class="shadow-lg">
                <img src="https://placehold.co/600x400" class="w-full" alt="">
                <div class="py-3 px-5">
                    <h4 class="text-center font-bold">Cetak </h4>
                </div>
            </div>
        </div>
    </section>

    <!-- tentang web er we -->
    <section id="about" class="py-20 bg-primary">
        <div class="flex space-x-10 items-center ">
            <img src="https://placehold.co/300" class="w-24 md:w-1/3 ml-4" alt="">
            <div>
                <p class="mb-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet!
                </p>
                <h3 class="text-5xl font-bold mb-5 text-secondary">Tentang RW 08</h3>
                <p class="mb-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
                    consectetur
                    delectus.
                    Fugit nisi
                    quidem, provident vero fuga voluptates animi pariatur perspiciatis facilis facere dicta nihil? Vero
                    corporis nisi qui et!</p>
                <p class="mb-5 pb-5 border-b border-gray-800 text-secondary">Lorem ipsum dolor sit amet consectetur,
                    adipisicing
                    elit.
                    Magni
                    incidunt harum molestias sit
                    libero quod
                    expedita ut perspiciatis, consequuntur repudiandae.</p>
                <ul class="md:flex md:space-x-5 text-secondary">
                    <li class="text-secondary"><a href=""><i class="fa-brands fa-facebook"></i> Facebook</a>
                    </li>
                    <li class="text-secondary"><a href=""><i class="fa-brands fa-youtube"></i> Youtube</a>
                    </li>
                    <li class="text-secondary"><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="py-5 text-center font-bold">&copy; 2024 RW 08</footer>

    <script>
        const buttonToogle = document.querySelector('.buttonToogle')
        const mobileMenu = document.querySelector('.mobileMenu')

        buttonToogle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden')
        })
    </script>
</body>

</html>
