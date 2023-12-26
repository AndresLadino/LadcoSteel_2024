@extends('layouts.dashboard-base')
@section('content')
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start border-b shadow-lg justify-between p-5 dark:border-gray-700">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-white">
                <span
                    class="underline underline-offset-3 decoration-8 decoration-amber-400 dark:decoration-blue-600">Información
                    completa sobre el trabajador
                </span>
            </h1>

        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">

            
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-slate-100 dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 px-2 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span>Información personal</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden p-4" aria-labelledby="accordion-flush-heading-1">
                        <div class="grid grid-cols-12 gap-6">
                            <!--Nombre-->
                            <div class="col-span-6 sm:col-span-12">
                                <label for="nombre_1"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo
                                </label>
                                <p class="text-gray-900 text-sm ">{{ $trabajador->nombre_1 }} {{ $trabajador->nombre_2 }}
                                    {{ $trabajador->apellido_1 }} {{ $trabajador->apellido_2 }}</p>
                            </div>

                            <!--Segunda fila-->

                            <div class="col-span-6 sm:col-span-2">
                                <label for="tipo_doc"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de
                                    documento </label>
                                
                                
                                <p>{{ $trabajador->tipo_cedula }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2"><!--acomodando los inputs-->
                                <label for="cedula"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cédula
                                </label>
                                <p class="text-gray-900 text-sm ">{{ $trabajador->cedula }}</p>

                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="fecha_nac"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha
                                    de
                                    nacimiento </label>
                                <div class="relative max-w-sm">

                                    <p class="text-gray-900 text-sm">{{ date('d/m/Y', strtotime($trabajador->fecha_nac)) }}
                                    </p>

                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-1">

                                <label for="sangre"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Tipo
                                    sangre/RH </label>
                                    <p class="text-gray-900 text-sm ">{{ $trabajador->tipo_sangre }}</p>
                                
                            </div>
                            <div class="col-span-6 sm:col-span-1">
                                <label for="sexo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                                    <p class="text-gray-900 text-sm ">{{ $trabajador->sexo }}</p>
                               
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="correo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electrónico
                                </label>
                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->correo_electronico)
                                        {{ $trabajador->correo_electronico }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>


                            </div>
                            <div class="col-span-6 sm:col-span-1">
                                <label for="telefono_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono </label>

                                <p class="text-gray-900 text-sm">{{ $trabajador->telefono }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="direccion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección </label>

                                <p class="text-gray-900 text-sm">{{ $trabajador->direccion }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="barrio"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barrio </label>
                                <p class="text-gray-900 text-sm">{{ $trabajador->barrio }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="localidad"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localidad </label>

                                <p class="text-gray-900 text-sm">{{ $trabajador->localidad }}</p>
                            </div>

                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 px-2 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>Información de la empresa</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden p-4" aria-labelledby="accordion-flush-heading-2">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="cargo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargo
                                </label>

                                <p class="text-gray-900 text-sm">{{ $trabajador->cargo }}</p>

                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="salario"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario </label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->salario)
                                    ${{ number_format(str_replace(['$', ','], '', $trabajador->salario), 0, '.', ',') }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="salario_neto"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario
                                    neto </label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->salario_neto)
                                    ${{ number_format(str_replace(['$', ','], '', $trabajador->salario_neto), 0, '.', ',') }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contrato"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contrato </label>
                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->contrato)
                                        {{ $trabajador->contrato }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>

                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="fecha_ingreso"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha
                                    de
                                    ingreso a
                                    la empresa </label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->fecha_ingreso)
                                    {{ date('d/m/Y', strtotime($trabajador->fecha_ingreso)) }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="eps"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EPS</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->eps)
                                        {{ $trabajador->eps }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="fondo_pensiones"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fondo
                                    de
                                    pensiones</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->fondo_pensiones)
                                        {{ $trabajador->fondo_pensiones }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 px-2 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                            <span>Información para casos de emergencia</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden p-4" aria-labelledby="accordion-flush-heading-3">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nombre_eme_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->nombre_emergencia_1)
                                        {{ $trabajador->nombre_emergencia_1 }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="tel_eme_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->telefono_emergencia_1)
                                        {{ $trabajador->telefono_emergencia_1 }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="parentezco_eme_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parentezco</label>
                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->parentezco_1)
                                        {{ $trabajador->parentezco_1 }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nombre_eme_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->nombre_emergencia_2)
                                        {{ $trabajador->nombre_emergencia_2 }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="tel_eme_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->parentezco_2)
                                        {{ $trabajador->telefono_emergencia_2 }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="parentezco_eme_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parentezco</label>

                                <p class="text-gray-900 text-sm">
                                    @if ($trabajador->parentezco_2)
                                        {{ $trabajador->parentezco_2 }}
                                    @else
                                        No se ha añadido esta información.
                                    @endif
                                </p>

                            </div>
                        </div>
                    </div>
                </div>




                <!--<div class="col-span-6">
                                                                                            <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biography</label>
                                                                                            <textarea id="biography" rows="4"
                                                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                                placeholder="👨‍💻Full-stack web developer. Open-source contributor."></textarea>
                                                                                        </div>-->
        </div>
    </div>



    <div class="items-center p-6 rounded-b dark:border-gray-700">
        <a href="{{ route('trabajador.index') }}"
            class="bg-gradient-to-br from-gray-200 to-white hover:bg-gradient-to-bl text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-slate-800 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm rounded-lg px-5 py-2.5 text-center inline-flex items-center mr-2">
            
            <svg fill="currentColor" class="w-6 h-6 mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.021 299.021" xml:space="preserve" stroke="#000000">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                
                <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M292.866,254.432c-2.288,0-4.443-1.285-5.5-3.399c-0.354-0.684-28.541-52.949-146.169-54.727v51.977 c0,2.342-1.333,4.48-3.432,5.513c-2.096,1.033-4.594,0.793-6.461-0.63L2.417,154.392C0.898,153.227,0,151.425,0,149.516 c0-1.919,0.898-3.72,2.417-4.888l128.893-98.77c1.87-1.426,4.365-1.667,6.461-0.639c2.099,1.026,3.432,3.173,3.432,5.509v54.776 c3.111-0.198,7.164-0.37,11.947-0.37c43.861,0,145.871,13.952,145.871,143.136c0,2.858-1.964,5.344-4.75,5.993 C293.802,254.384,293.34,254.432,292.866,254.432z"/> </g> </g> </g>
                
                </svg> Volver</a>
                
       
        <a href="{{ route('trabajador.edit', $trabajador->id) }}">
            <button type="submit"
            class="text-white bg-gradient-to-br from-amber-600 to-amber-300 hover:bg-gradient-to-bl text-gray-900 px-5 py-2.5 group  group-hover:from-amber-600 group-hover:to-amber-300 hover:text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm rounded-lg px-5 py-2.5 text-center inline-flex items-center mr-2">

            <svg class="w-6 h-6 mr-2" fill="currentColor"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                                    </path>
                                                                    <path fill-rule="evenodd"
                                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
            Editar
        </button>
        </a>
    </div>
@endsection
