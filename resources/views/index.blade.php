@extends('layouts.base')
@section('content')
    <main>
        <!-- Slider -->

        <section id="slider-mobiliario-metalico">
            <div id="animation-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden lg:h-[50rem] md:h-[50rem]">
                    <!-- Item 1 -->
                    <div class="hidden" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_6.gif') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_5.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-800/60 group-hover:bg-neutral-800/90 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Anterior</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-800/60 group-hover:bg-neutral-800/90 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Siguiente</span>
                    </span>
                </button>
            </div>
        </section>
        <!-- Informacion principal -->
        <section class="bg-white">
            <div class="pt-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-10 text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    @lang('messages.title')
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">
                    @lang('messages.title-desc')</p>

                <div class="container my-24 mx-auto md:px-6">
                    <section class="mb-16 text-center">
                        <div class="grid lg:grid-cols-3 lg:gap-x-12">
                            <div class="mb-12 lg:mb-0">
                                <div
                                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_10px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex justify-center">
                                        <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="h-7 w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h5 class="mb-4 text-lg font-semibold">Habilidad, Pasión y Dedicación </h5>
                                        <p>
                                            En la esencia de cada producto que sale de nuestras instalaciones reside una
                                            historia única de habilidad, pasión y dedicación. La primera tarjeta,
                                            simbolizada por un ícono de herramientas, refleja el arduo trabajo que dedicamos
                                            a cada pieza de mobiliario metálico. Desde la concepción hasta la fabricación,
                                            nuestro compromiso con la excelencia se manifiesta en cada detalle, asegurando
                                            que cada creación sea una obra maestra de artesanía y durabilidad.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-12 lg:mb-0">
                                <div
                                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_10px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex justify-center">
                                        <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="h-7 w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h5 class="mb-4 text-lg font-semibold">Confianza Depositada</h5>
                                        <p>
                                            En Ladco Steel, valoramos profundamente la confianza que depositan nuestros
                                            clientes en nosotros. Representada por un escudo con un distintivo visto bueno
                                            en su centro, la segunda tarjeta resalta la integridad y la calidad que son
                                            fundamentales en nuestro enfoque. Nos esforzamos por construir relaciones
                                            sólidas basadas en la transparencia, la confiabilidad y la satisfacción del
                                            cliente, asegurando que cada producto entregado supere las expectativas y
                                            refuerce la confianza depositada en nuestra empresa.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div
                                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_10px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex justify-center">
                                        <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="h-7 w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h5 class="mb-4 text-lg font-semibold">Innovación Constante</h5>
                                        <p>
                                            En Ladco Steel, no nos conformamos con la excelencia actual; más bien, nos impulsamos hacia adelante con un espíritu de mejora continua. Esta tarjeta refleja nuestro compromiso con la exploración de nuevas tecnologías, métodos de trabajo avanzados y soluciones vanguardistas. Así, garantizamos que cada pieza de mobiliario que creamos no solo resista el paso del tiempo, sino que también incorpore las últimas tendencias y enfoques para ofrecer resultados excepcionales.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section: Design Block -->
                </div>
                <!-- Container for demo purpose -->
            </div>
        </section>
        <!-- Productos bg-amber-300
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt=""> -->

        <section class="w-10/12 mx-auto h-fit pb-10">
            <h1
                class="text-center text-4xl font-extrabold tracking-tight leading-10 text-gray-900 md:text-5xl lg:text-6xl ">
                Productos
            </h1>


            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-12 w-9/12 mx-auto">
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
                    <img class="h-auto max-w-full rounded-lg object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[85%] flex-col items-center justify-center px-10 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">Mamparas metálicas</h1>
                        <p
                            class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Próximamente</p>
                        <a href="#"><button
                                class=" bg-amber-500 px-3.5 py-2 text-sm text-white shadow shadow-black/60">Conocer
                                más</button></a>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
                    <img class="h-auto max-w-full rounded-lg object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[85%] flex-col items-center justify-center px-10 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">Nombre del producto</h1>
                        <p
                            class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Próximamente</p>
                        <a href="#"><button
                                class=" bg-amber-500 px-3.5 py-2 text-sm text-white shadow shadow-black/60">Conocer
                                más</button></a>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
                    <img class="h-auto max-w-full rounded-lg object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[85%] flex-col items-center justify-center px-10 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">Nombre del producto</h1>
                        <p
                            class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Próximamente</p>
                        <a href="#"><button
                                class=" bg-amber-500 px-3.5 py-2 text-sm text-white shadow shadow-black/60">Conocer
                                más</button></a>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
                    <img class="h-auto max-w-full rounded-lg object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[85%] flex-col items-center justify-center px-10 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">Nombre del producto</h1>
                        <p
                            class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Próximamente</p>
                        <a href="#"><button
                                class=" bg-amber-500 px-3.5 py-2 text-sm text-white shadow shadow-black/60">Conocer
                                más</button></a>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
                    <img class="h-auto max-w-full rounded-lg object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[85%] flex-col items-center justify-center px-10 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">Nombre del producto</h1>
                        <p
                            class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Próximamente</p>
                        <a href="#"><button
                                class=" bg-amber-500 px-3.5 py-2 text-sm text-white shadow shadow-black/60">Conocer
                                más</button></a>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
                    <img class="h-auto max-w-full rounded-lg object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[85%] flex-col items-center justify-center px-10 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">Nombre del producto</h1>
                        <p
                            class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Próximamente</p>
                        <a href="#"><button
                                class=" bg-amber-500 px-3.5 py-2 text-sm text-white shadow shadow-black/60">Conocer
                                más</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Jumbotron -->
        <section>

            <section
                class="bg-gray-600 bg-opacity-100 bg-fixed bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1608126841548-dfad1d420a0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80')]  bg-blend-multiply">
                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                        ¡Contáctenos!</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">¿En busca de
                        soluciones personalizadas que superen tus expectativas? Nuestro formulario de contacto es tu
                        puerta de entrada a un mundo de posibilidades. ¡Permítenos ayudarte a alcanzar tus metas y
                        necesidades! </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                        <a href="/contacto"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            ¡Vamos!
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <!--<a href="#"
                                                        class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                                        Learn more
                                                    </a>-->
                    </div>
                </div>
            </section>

        </section>
    </main>
    <button id="to-top-button" onclick="goToTop()" title="Go To Top"
        class="hidden fixed z-90 bottom-8 right-8 border-0 w-16 h-16 rounded-full drop-shadow-md bg-amber-500 text-white text-3xl font-bold">&uarr;</button>
    <script>
        var toTopButton = document.getElementById("to-top-button");

        // When the user scrolls down 200px from the top of the document, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                toTopButton.classList.remove("hidden");
            } else {
                toTopButton.classList.add("hidden");
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function goToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <script type="text/javascript">
        // options with modified interval
        const options = {
            defaultPosition: 1,
            interval: 5000, // Intervalo en milisegundos (3 segundos)

            // callback functions
            onNext: () => {
                console.log('next slider item is shown');
            },
            onPrev: () => {
                console.log('previous slider item is shown');
            },
            onChange: () => {
                console.log('new slider item has been shown');
            },
        };

        // instance options object
        const instanceOptions = {
            id: 'carousel-example',
            override: true
        };

        // Crear una nueva instancia de Carrusel con las opciones proporcionadas
        const carousel = new Carousel(carouselElement, items, options, instanceOptions);
    </script>
@endsection
