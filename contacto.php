<?php include('partials/header.php') ?>
<section class="flex lg:flex-row flex-col items-center justify-between mt-28 max-w-5xl mx-auto relative px-10 lg:px-0">

    <div class="">
        <h1 class="font-black text-4xl xl:text-4xl text-primary mt-12 mb-2">¿Quieres saber<span class="text-secondary"> más <br> sobre nosotros?</span></h1>
        <p class="text-base max-w-lg font-light mb-3">En Daffl, nos preocupamos en un 100% de todo el fullfilment y última milla de emprendedores y Pymes. Donde nuestros.</p>
    </div>
    <div>

        <ul class="flex gap-3">
            <li><img src="assets/img/in.svg" alt="" class="w-12 mb-2"></li>
            <li><img src="assets/img/face.svg" alt="" class="w-12 mb-2"></li>
            <li><img src="assets/img/ig.svg" alt="" class="w-12 mb-2"></li>

        </ul>
    </div>
</section>



<section class="relative mt-16">

    <div class="max-w-xl mx-auto ">
        <div class="absolute z-0 w-full max-w-xl mx-auto  " style="background-image:url(assets/img/oval.svg);    background-size: contain; background-position: center;   background-repeat: no-repeat;
    width: 100%;
    height: 400px;">

        </div>
    </div>

    <section class="max-w-3xl mx-auto relative z-10 ">
        <form action="" class="grid grid-cols-1 lg:grid-cols-2 gap-6 px-10 lg:px-0">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 lg:col-span-1" placeholder="Nombre completo">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 lg:col-span-1" placeholder="Empresa o Marca">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 lg:col-span-1" placeholder="Email">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 lg:col-span-1" placeholder="Teléfono">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 lg:col-span-1" placeholder="¿Cuántos pedidos tienes mensualmente?">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 lg:col-span-1" placeholder="¿Cuántos sus tiene tu tienda?">
            <input type="text" class="shadow-btn outline-none rounded-lg outline-none px-4 py-3 col-span-2 col-span-2 " placeholder="¿Algo más que nos quieras mencionar?">

        </form>
        <button class="shadow-btn mt-9 px-14 mx-auto py-2 block text-white hover:text-primary hover:bg-white border border-transparent hover:border-primary rounded-10 bg-primary">
            <a class="   " href="#">Enviar</a>
        </button>
    </section>
</section>

<?php include('partials/footer.php') ?>


<style>
    nav {
        background: #fff !important;
        box-shadow: 0px 3px 6px #00000041;
        padding-bottom: 1rem;
    }

    .btn-nav {
        color: #000F36;
        border: 1px solid;
    }

    nav ul li:nth-child(6) {
        color: #4A94EF;
        background: #fff;
    }
</style>