@extends('layouts.base')
@section('content')
    @if (session('success'))
        <div id="alert-email"
            class="absolute mb-20 bottom-0 right-0 p-6 max-w-sm bg-neutral-950 rounded-xl shadow-lg flex items-center space-x-4 z-50">
            <div class="shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                    viewBox="0 0 48 48">
                    <path fill="#4caf50" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z">
                    </path>
                    <path fill="#ccff90"
                        d="M34.602,14.602L21,28.199l-5.602-5.598l-2.797,2.797L21,33.801l16.398-16.402L34.602,14.602z">
                    </path>
                </svg>
            </div>
            <div>
                <div class="text-xl font-medium text-lime-500	">¡Correo enviado!</div>
                <p class="text-white">{{ session('success') }}</p>
            </div>
            <button type="button"
                class="absolute top-0 right-0 ml-auto mx-1.5 y-1.5 bg-neutral-600 text-lime-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-email" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif






    <div class="w-full h-auto my-10 ">
        <div class="grid grid-cols-1 grid-rows-1 gap-0 md:grid-cols-2 w-8/12 h-auto mx-auto">

            <div
                class="bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black p-12 h-[45rem]">

                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-4xl lg:text-4xl dark:text-white">
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-amber-300 dark:decoration-blue-600">¡Contáctenos!</span>
                </h1>

                <p class="mt-9 text-xl font-normal text-white dark:text-gray-400">Lo estaremos contactando lo más pronto
                    posible según sus requerimientos.</p>

                <p
                    class="mt-12 text-xl font-medium text-white dark:text-gray-400 underline decoration-solid decoration-amber-300 decoration-2">
                    ¿Dónde encontrarnos?</p>
                <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-white text-lg">Calle 79 #68H-17 Barrio Las Ferias, Bogotá, Colombia.</span>
                    </li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15905.940130501685!2d-74.0822988!3d4.6854436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b119c7c65c5%3A0xf514d0e4d65d74cf!2sLADCO%20STEEL%20S.A.S!5e0!3m2!1ses!2sco!4v1696373652289!5m2!1ses!2sco" class="lg:w-96 lg:h-52 min-w-fit	 mt-6 " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p
                    class="mt-6 text-xl font-medium text-white dark:text-gray-400 underline decoration-solid decoration-amber-300 decoration-2">
                    ¿Prefiere llamarnos?</p>
                <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-white text-lg">+57 3024578197</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-white text-lg">6042158</span>
                    </li>
                </ul>

            </div>
            <div class="p-4 my-auto bg-transparent border-solid border-2 border-slate-100 shadow-2xl">
                <h1 class="text-5xl font-extrabold tracking-tight leading-10 text-gray-900 md:text5xxl lg:text5xxl mb-10 ">
                    Solo unos cuantos detalles más...
                </h1>
                <form action="{{ route('enviar-correo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="nombreCliente" id="nombreCliente"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                            placeholder=" " />
                        <label for="nombreCliente"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-300 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre
                            completo</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="correoCliente" id="correoCliente"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                                placeholder=" " />
                            <label for="correoCliente"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-300 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo
                                electrónico</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="tel" name="telCliente" id="telCliente"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                                placeholder=" " />
                            <label for="telCliente"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-300 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Teléfono</label>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="msgCliente"
                            class="block mb-2 text-sm font-normal text-gray-900 dark:text-white">Déjanos
                            un mensaje</label>
                        <textarea id="msgCliente" name="msgCliente" rows="7"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 focus:ring-amber-300 focus:border-amber-300 resize-none"
                            placeholder="Escribe tu mensaje aquí..."></textarea>

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="archivosCliente">Sube tus archivos</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-transparent focus:outline-none focus:border-amber-300"
                            id="archivosCliente" name="archivosCliente" type="file" accept="application/pdf"
                            multiple>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Adjunte sus planos
                            y/o cotizaciones
                            en formato PDF para darles un vistazo.</p>

                    </div>
                    <button type="submit"
                        class="text-white bg-amber-300 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
