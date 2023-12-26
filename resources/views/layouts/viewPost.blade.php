@extends('layouts.base')
@section('content')
    <main>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0"
            nonce="bBky7thP"></script>
        <!-- Header -->
        <div class="relative w-full h-96">
            <img src="{{ asset('images/blog/' . $post->imagenFondo) }}" alt="{{ $post->titulo }}" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="w-full h-fit md:w-8/12 mx-auto pt-5">
                    <div class="w-full h-14 flow-root p-4">
                        <p class="float-left text-xs lg:text-lg text-white font-semibold">
                            {{ $post->created_at->format('d/m/Y') }}
                        </p>
                        <a href="{{ url()->previous() }}">
                            <button type="button" class="w-auto flex items-center float-right justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto">
                                <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>
                                <span>Volver</span>
                            </button>
                        </a>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-bold text-white text-center mt-12">{{ $post->titulo }}</h1>
                </div>
            </div>
        </div>
        
        
        
        <!-- Contenido-->
        <div class="w-full lg:w-8/12 h-fit mx-auto py-16 px-4 ">
            <div class="grid grid-flow-col">
                <!--Columna izq-->
                <div class="col-span-1 flow-root lg:w-64">
                    <p class="text-base text-slate-500 ">Compartir</p>
                    <!--Facebook pagina
                                        <div class="fb-share-button" data-href="https://www.ladcosteel.com.co/" data-layout="" data-size=""><a
                                                target="_blank"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.ladcosteel.com.co%2F&amp;src=sdkpreparse"
                                                class="fb-xfbml-parse-ignore">Compartir</a></div>-->
                    <!--Facebook propio AGREGARLE LA S A HTTP -->
                    <a
                        href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F{{ str_replace('http://', '', Request::url()) }}%2F&amp;src=sdkpreparse"><button
                            type="button"
                            class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-full text-sm px-3 py-3 text-center inline-flex items-center mr-2 my-4">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 8 19">
                                <path fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button></a>
                    <!--<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F{ str_replace('http://', '', Request::url()) }%2F&amp;src=sdkpreparse">asasd
                                            </a>-->

                </div>
                <!--Columna der-->
                <div class="col-span-4 text-slate-500 overflow-hidden">
                    <p>{{ $post->parrafoPrincipal }}</p>
                    <img class="rounded-t-lg lg:max-w-2xl	 mx-auto mt-12 " src="/images/blog/{{ $post->imagenPrincipal }}"
                        alt="" />
                    <p class="mt-12">{{ $post->parrafoSecundario }}</p>
                    <img class="rounded-t-lg lg:max-w-2xl	 mx-auto mt-12 " src="/images/blog/{{ $post->imagenSecundaria }}"
                        alt="" />
                </div>

            </div>
        </div>
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
    </main>
@endsection
