@extends('layouts.dashboard-base')
@section('content')
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start border-b shadow-lg justify-between p-5 dark:border-gray-700">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                <span class="underline underline-offset-3 decoration-8 decoration-amber-400 dark:decoration-blue-600">Crear
                    registro para trabajador
                </span>
            </h1>
            
        </div>
        <p class="text-gray-500 dark:text-gray-400 mx-5 mt-10" >Los campos marcados con * son obligatorios, de no ser llenados no se
            podrá crear el registro.</p>
        <!-- Modal body -->
        <div class="p-6 space-y-6">

            <form action="/trabajador" method="POST">
            @csrf
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
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
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nombre_1"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer
                                    nombre <span class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="nombre_1" id="nombre_1"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Primer nombre" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nombre_2"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Segundo
                                    nombre</label>
                                <input type="text" name="nombre_2" id="nombre_2"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Segundo nombre">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="apellido_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer apellido
                                    <span class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="apellido_1" id="apellido_1"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Primer apellido" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="apellido_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Segundo Apellido
                                    <span class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="apellido_2" id="apellido_2"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Segundo Apellido" required>
                            </div>
                            <!--Segunda fila-->

                            <div class="col-span-6 sm:col-span-2">
                                <label for="tipo_doc"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de
                                    documento <span class="text-red-700 font-extrabold">*</span></label>
                                <select id="tipo_documento" name="tipo_documento"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                    <option value="Cédula extranjera">Cédula extranjera</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-2"><!--acomodando los inputs-->
                                <label for="cedula"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cédula
                                    <span class="text-red-700 font-extrabold">*</span> </label>
                                <input type="number" name="cedula" id="cedula"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Cédula de ciudadanía" maxlenght="11" required>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="fecha_nac"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha
                                    de
                                    nacimiento <span class="text-red-700 font-extrabold">*</span></label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input datepicker name="fecha_nac" id="fecha_nac" type="date"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date">
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-1">
                                <label for="sangre"
                                    class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Tipo 
                                    sangre/RH <span class="text-sm text-red-700 font-extrabold">*</span></label>
                                    <select id="sangre" name="sangre"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Seleccione</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-1">
                                <label for="sexo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                                <select name="sexo" id="sexo"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Seleccione</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="correo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electrónico <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="email" name="correo" id="correo"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="ejemplo@ejemplo.com" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="telefono_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="number" maxlength="10" name="telefono_1" id="telefono_1"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="3100000000" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="direccion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="direccion" id="direccion"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Dirección de residencia" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="barrio"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barrio <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="barrio" id="barrio"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Barrio en el que reside" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="localidad"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localidad <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="localidad" id="localidad"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Localidad en la que reside" required>
                            </div>

                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
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
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="cargo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargo
                                    <span class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="cargo" id="cargo"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="El cargo que tiene" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="salario"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="salario" id="salario"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="El salario que recibe" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="salario_neto"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario
                                    neto <span class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="salario_neto" id="salario_neto"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="El salario neto que tiene" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contrato"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contrato <span
                                        class="text-red-700 font-extrabold">*</span></label>
                                <input type="text" name="contrato" id="contrato"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tipo de contrato" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="fecha_ingreso"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha
                                    de
                                    ingreso a
                                    la empresa <span class="text-red-700 font-extrabold">*</span></label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input datepicker id="fecha_ingreso" name="fecha_ingreso" type="date"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Seleccionar fecha">
                                </div>
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="eps"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EPS</label>
                                <input type="text" name="eps" id="eps"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="EPS a la cual está afiliado">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="fondo_pensiones"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fondo
                                    de
                                    pensiones</label>
                                <input type="text" name="fondo_pensiones" id="fondo_pensiones"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Fondo de pensiones al que está afiliado">
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
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
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nombre_eme_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                                <input type="text" name="nombre_eme_1" id="nombre_eme_1"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nombre completo" >
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="tel_eme_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                                <input type="text" name="tel_eme_1" id="tel_eme_1"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Telefono de la persona" >
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="parentezco_eme_1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parentezco</label>
                                <input type="text" name="parentezco_eme_1" id="parentezco_eme_1"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Parentezco" >
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nombre_eme_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                                <input type="text" name="nombre_eme_2" id="nombre_eme_2"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nombre completo" >
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="tel_eme_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                                <input type="text" name="tel_eme_2" id="tel_eme_2"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Telefono de la persona" >
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="parentezco_eme_2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parentezco</label>
                                <input type="text" name="parentezco_eme_2" id="parentezco_eme_2"
                                    class="form-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Parentezco" >
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
    <!-- Modal footer -->
    <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
       
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <a href="{{ route('trabajador.index') }}"
                class="text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-slate-800 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm rounded-lg px-5 py-2.5 text-center inline-flex items-center mr-2">
                <svg fill="currentColor" class="w-6 h-6 mr-2" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 301.153 301.153" xml:space="preserve">
                    <g>
                        <path d="M257.098,44.055c-58.738-58.736-154.311-58.742-213.047,0c-58.733,58.738-58.727,154.319,0,213.047
                                               c58.742,58.739,154.314,58.733,213.047,0C315.831,198.362,315.837,102.793,257.098,44.055z M148.952,189.476
                                               c-2.402,2.402-6.29,2.402-8.695,0l-50.008-50.005c-1.186-1.198-1.79-2.771-1.801-4.348c0-1.573,0.604-3.146,1.801-4.348
                                               c2.405-2.401,6.29-2.401,8.695,0l45.648,45.657l66.305-66.299c2.414-2.411,6.3-2.401,8.707,0c2.402,2.405,2.402,6.29,0,8.695
                                               L148.952,189.476z" />
                    </g>
                </svg> Cancelar</a>
        <button id="crearEmpleado" style="display: none"
            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
            type="submit">Crear</button>
            
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Agregar una clase "form-field" a cada campo que deseas rastrear.
            $(".form-field").on("input", function() {
                var completedFields = $(".form-field").filter(function() {
                    return $(this).val().trim() !== "";
                });

                if (completedFields.length >= 13) {
                    $("#crearEmpleado").show();
                } else {
                    $("#crearEmpleado").hide();
                }
            });
        });
    </script>
@endsection
