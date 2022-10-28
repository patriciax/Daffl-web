<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <title>Document</title>
</head>

<body>
    <div class="elipse bg-light">
        <img src="assets/img/logo.png" alt="">
    </div>

    <header>
        <nav class="lg:absolute fixed z-50 bg-white lg:flex-row bg-white md:bg-transparent flex-col top-0 flex items-center justify-between w-full text-lg text-gray-700 px-5  lg:px-10 pt-4">
            <div class="lg:block flex items-center justify-between w-full lg:w-auto">
                <a href="/">
                    <img src="assets/img/logo.png" class="w-40 object-contain " />
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer lg:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>



            <div class="hidden  lg:flex items-center mt-4" id="menu">
                <ul class="pt-4 text-base text-secondary lg:flex md:justify-between md:pt-0 items-center font-semibold">
                    <li>
                        <a class="xl:mr-10  lg:mr-6  py-2 block hover:text-primary" href="/">Home</a>
                    </li>
                    <li>
                        <a class="xl:mr-10  lg:mr-6  py-2 block hover:text-primary" href="/about.php">Quienes somos</a>

                    </li>
                    <li class="relative xl:mr-10  lg:mr-6  py-2 block hover:text-primary">
                        <input type="checkbox" id="sortbox" class="hidden absolute">
                        <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
                            <span class="">Se un daffer</span>
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </label>

                        <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-white border border-gray-400 transition delay-75 ease-in-out z-10">
                            <ul class="block  text-gray-900">
                                <li><a href="/daffer-bodega.php" class="block px-3 py-2 hover:bg-gray-200">Ser boguedero</a></li>
                                <li><a href="/daffer-repartidor.php" class="block px-3 py-2 hover:bg-gray-200">Ser despachador</a></li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="xl:mr-10  lg:mr-6  py-2 block hover:text-primary" href="/precios.php">Precios</a>
                    </li>
                    <li>
                        <a class=" xl:mr-10  lg:mr-6  py-2 block hover:text-primary " href="/servicios.php">Servicios</a>
                    </li>
                    <li>
                        <a class=" px-4 py-1.5 block text-white hover:text-primary border border-transparent rounded-10 bg-primary xl:mr-10  lg:mr-6 " href="/contacto.php">Contactar</a>
                    </li>
                    <li>
                        <a class="btn-nav px-4 py-1.5  block text-white hover:text-primary border rounded-10 border-2 border-white" href="#">Ingresar</a>
                    </li>

                </ul>
            </div>

        </nav>
    </header>