@extends('layouts.base')
@section('content')
    <section
        class="bg-gray-700	 bg-opacity-100 bg-fixed bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1580315362297-5be36f0de025?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=2157')]  bg-blend-multiply">
        <div class="h-max ">

            <div class=" w-8/12 m-auto p-4">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white">
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-amber-400 dark:decoration-cyan-300">Mantente
                        al tanto del estado de tu pedido
                    </span>
                </h1>
                <p class="mb-3 text-lg text-gray-200 md:text-xl dark:text-gray-400">Con nuestra función de seguimiento de
                    pedidos, puedes estar siempre informado sobre el estado de tu orden. Desde el momento en que realizas tu
                    pedido hasta su entrega final.

                </p>
            </div>


            <!--Cuerpo-->
            <div class="w-10/12 md:w-7/12 h-screen mx-auto py-7 ">
                <div
                    class="mt-12 space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-300 before:to-transparent">


                    @if ($pedido->estado == 'Recibido')
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12" height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Hemos recibido tu orden! 😉</div>
                                    <time
                                        class="font-caveat font-medium text-amber-500">{{ $pedido->fecha_estado_Recibido }}

                                    </time>
                                </div>
                                <div class="text-slate-500">Estamos en proceso de análisis de tu solicitud <span
                                        class="font-bold ">{{ $pedido->titulo }}</span>. <p
                                        class="text-gray-500 dark:text-gray-400"><a href="#"
                                            class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline"
                                            data-popover-target="popover-image">Más información</a> </p>
                                    <div id="popover-image" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm bg-gradient-to-tl from-white via-white to-slate-200 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                        <div class="grid grid-cols-5">
                                            <div class="col-span-5 p-3">
                                                <div class="space-y-2">
                                                    <h3 class="font-bold text-gray-900 dark:text-white">Tu orden es... 👀
                                                    </h3>
                                                    <p class="font-bold">{{ $pedido->titulo }}</p>
                                                    <p class="font-normal">{{ $pedido->descripcion }}</p>
                                                    <p class="font-normal text-xs">Tu referencia para esta orden es
                                                        {{ $pedido->referencia }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($pedido->estado == 'En producción')
                        <!-- Item #1 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12" height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Hemos recibido tu orden! 😉</div>
                                    <time
                                        class="font-caveat font-medium text-amber-500">{{ $pedido->fecha_estado_Recibido }}

                                    </time>
                                </div>
                                <div class="text-slate-500">Estamos en proceso de análisis de tu solicitud <span
                                        class="font-bold ">{{ $pedido->titulo }}</span>. <p
                                        class="text-gray-500 dark:text-gray-400"><a href="#"
                                            class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline"
                                            data-popover-target="popover-image">Más información</a> </p>
                                    <div id="popover-image" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm bg-gradient-to-tl from-white via-white to-slate-200 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                        <div class="grid grid-cols-5">
                                            <div class="col-span-5 p-3">
                                                <div class="space-y-2">
                                                    <h3 class="font-bold text-gray-900 dark:text-white">Tu orden es... 👀
                                                    </h3>
                                                    <p class="font-bold">{{ $pedido->titulo }}</p>
                                                    <p class="font-normal">{{ $pedido->descripcion }}</p>
                                                    <p class="font-normal text-xs">Tu referencia para esta orden es
                                                        {{ $pedido->referencia }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item #2 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group ">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">


                                <svg class="fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                    enable-background="new 0 0 0 0" xml:space="preserve">
                                    <path
                                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                        <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                            dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                                    </path>
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Iniciamos a construir tu idea! 🛠</div>
                                    <time
                                        class="font-caveat font-medium text-indigo-500">{{ $pedido->fecha_estado_Produccion }}</time>
                                </div>
                                <div class="text-slate-500">Hemos iniciado con la elaboración de tu idea a partir de las
                                    indicaciones que nos diste. Esto nos tomará un tiempo, pero no te preocupes, te
                                    avisaremos cuando tu hayamos terminado.</div>
                            </div>
                        </div>
                    @elseif ($pedido->estado == 'Finalizado')
                        <!-- Item #1 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12" height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Hemos recibido tu orden! 😉</div>
                                    <time
                                        class="font-caveat font-medium text-amber-500">{{ $pedido->fecha_estado_Recibido }}

                                    </time>
                                </div>
                                <div class="text-slate-500">Estamos en proceso de análisis de tu solicitud <span
                                        class="font-bold ">{{ $pedido->titulo }}</span>. <p
                                        class="text-gray-500 dark:text-gray-400"><a href="#"
                                            class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline"
                                            data-popover-target="popover-image">Más información</a> </p>
                                    <div id="popover-image" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm bg-gradient-to-tl from-white via-white to-slate-200 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                        <div class="grid grid-cols-5">
                                            <div class="col-span-5 p-3">
                                                <div class="space-y-2">
                                                    <h3 class="font-bold text-gray-900 dark:text-white">Tu orden es... 👀
                                                    </h3>
                                                    <p class="font-bold">{{ $pedido->titulo }}</p>
                                                    <p class="font-normal">{{ $pedido->descripcion }}</p>
                                                    <p class="font-normal text-xs">Tu referencia para esta orden es
                                                        {{ $pedido->referencia }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item #2 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Iniciamos a construir tu idea! 🛠</div>
                                    <time
                                        class="font-caveat font-medium text-indigo-500">{{ $pedido->fecha_estado_Produccion }}</time>
                                </div>
                                <div class="text-slate-500">Hemos iniciado con la elaboración de tu idea a partir de las
                                    indicaciones que nos diste. Esto nos tomará un tiempo, pero no te preocupes, te
                                    avisaremos cuando tu hayamos terminado.</div>
                            </div>
                        </div>
                        <!-- Item #3 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Hemos finalizado con el proceso! 😃</div>
                                    <time
                                        class="font-caveat font-medium text-indigo-500">{{ $pedido->fecha_estado_Finalizado }}</time>
                                </div>
                                <div class="text-slate-500">Ha sido un arduo trabajo llevar tu idea a la realidad, pero...
                                    ¡Lo hemos logrado! Cada detalle ha sido cuidadosamente atendido para asegurarnos de que
                                    tus expectativas se cumplan plenamente. </div>
                            </div>
                        </div>
                    @elseif ($pedido->estado == 'Entregado')
                        <!-- Item #1 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Hemos recibido tu orden! 😉</div>
                                    <time
                                        class="font-caveat font-medium text-amber-500">{{ $pedido->fecha_estado_Recibido }}

                                    </time>
                                </div>
                                <div class="text-slate-500">Estamos en proceso de análisis de tu solicitud <span
                                        class="font-bold ">{{ $pedido->titulo }}</span>.<p
                                        class="text-gray-500 dark:text-gray-400"><a href="#"
                                            class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline"
                                            data-popover-target="popover-image">Más información</a> </p>
                                    <div id="popover-image" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm bg-gradient-to-tl from-white via-white to-slate-200 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                        <div class="grid grid-cols-5">
                                            <div class="col-span-5 p-3">
                                                <div class="space-y-2">
                                                    <h3 class="font-bold text-gray-900 dark:text-white">Tu orden es... 👀
                                                    </h3>
                                                    <p class="font-bold">{{ $pedido->titulo }}</p>
                                                    <p class="font-normal">{{ $pedido->descripcion }}</p>
                                                    <p class="font-normal text-xs">Tu referencia para esta orden es
                                                        {{ $pedido->referencia }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item #2 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Iniciamos a construir tu idea! 🛠</div>
                                    <time
                                        class="font-caveat font-medium text-indigo-500">{{ $pedido->fecha_estado_Produccion }}</time>
                                </div>
                                <div class="text-slate-500">Hemos iniciado con la elaboración de tu idea a partir de las
                                    indicaciones que nos diste. Esto nos tomará un tiempo, pero no te preocupes, te
                                    avisaremos cuando tu hayamos terminado.</div>
                            </div>
                        </div>
                        <!-- Item #3 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Hemos finalizado con el proceso! 😃</div>
                                    <time
                                        class="font-caveat font-medium text-indigo-500">{{ $pedido->fecha_estado_Finalizado }}</time>
                                </div>
                                <div class="text-slate-500">Ha sido un arduo trabajo llevar tu idea a la realidad, pero...
                                    ¡Lo hemos logrado! Cada detalle ha sido cuidadosamente atendido para asegurarnos de que
                                    tus expectativas se cumplan plenamente. </div>
                            </div>
                        </div>
                        <!-- Item #5 -->
                        <div
                            class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-300 group-[.is-active]:bg-emerald-500 text-slate-500 group-[.is-active]:text-emerald-50 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="10">
                                    <path fill-rule="nonzero"
                                        d="M10.422 1.257 4.655 7.025 2.553 4.923A.916.916 0 0 0 1.257 6.22l2.75 2.75a.916.916 0 0 0 1.296 0l6.415-6.416a.916.916 0 0 0-1.296-1.296Z" />
                                </svg>
                            </div>
                            <!-- Card -->
                            <div
                                class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded border border-slate-200 shadow">
                                <div class="flex items-center justify-between space-x-2 mb-1">
                                    <div class="font-bold text-slate-900">¡Tu orden ha sido entregada! 🤗 </div>
                                    <time
                                        class="font-caveat font-medium text-amber-500">{{ $pedido->fecha_estado_Entregado }}</time>
                                </div>
                                <div class="text-slate-500">Tu orden ha sido entregada, por nuestra parte no podemos decir
                                    más que muchas gracias por haber confiado en nosotros. ¡Esperamos verte pronto! </div>
                            </div>
                        </div>
                    @endif



                </div>

            </div>
        </div>
    </section>
@endsection
