@extends('layouts.dashboard-base')
@section('content')
    @if (session('success'))
        <div class="absolute top-20 right-0 m-4">
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md transition-opacity"
                role="alert" id="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">¡Listo!</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">

                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-amber-400 dark:decoration-blue-600">Gestionar
                        trabajadores
                    </span>
                </h1>
            </div>
            <div class="sm:flex">

                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <a href="trabajador/create">
                        <button type="button" data-modal-toggle="add-user-modal"
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center bg-green-500 text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Añadir trabajador
                        </button>
                    </a>


                </div>

            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" hidden
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    ID
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Cedula
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Cargo
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Contrato
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Fecha ingreso
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Teléfono
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Dirección
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                            @foreach ($trabajadores as $trabajador)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="text-base  font-normal text-gray-900 dark:text-white" hidden>
                                        {{ $trabajador->id }}
                                    </td>
                                    <td class="text-base pl-4 font-medium text-gray-900 dark:text-white">
                                        {{ $trabajador->nombre_1 . ' ' . $trabajador->nombre_2 . ' ' . $trabajador->apellido_1 . ' ' . $trabajador->apellido_2 }}
                                    </td>
                                    <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trabajador->cedula }}</td>

                                    <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trabajador->cargo }}</td>
                                    <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trabajador->contrato }}</td>
                                    <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trabajador->fecha_ingreso }}</td>
                                    <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trabajador->telefono }}</td>
                                    <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trabajador->direccion }}</td>

                                    <td class="p-4 space-x-2 whitespace-nowrap">

                                        <button id="dropdownDefaultButton-{{ $trabajador->id }}"
                                            data-dropdown-toggle="dropdown-{{ $trabajador->id }}"
                                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white hover:text-white dark:hover-text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400"
                                            type="button">
                                            <span
                                                class="relative flex items-center px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                Acciones
                                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </span>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdown-{{ $trabajador->id }}"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700">
                                            <ul class="text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownDefaultButton-{{ $trabajador->id }}">
                                                <li>
                                                    <a href="{{ route('trabajador.edit', $trabajador->id) }}">
                                                        <button
                                                            class="relative inline-flex items-center justify-center w-full  overflow-hidden text-sm font-medium text-gray-900  group bg-gradient-to-br from-amber-600 to-amber-300 group-hover:from-amber-600 group-hover:to-amber-300 hover:text-white  dark:focus:ring-red-400"
                                                            type="button">
                                                            <span
                                                                class="relative flex items-center px-5 w-full py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900  group-hover:bg-opacity-0">
                                                                <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                                    </path>
                                                                    <path fill-rule="evenodd"
                                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg> Editar
                                                            </span>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button data-trabajador-id="{{ $trabajador->id }}"
                                                        data-modal-toggle="delete-user-modal"
                                                        class="relative inline-flex items-center justify-center w-full  overflow-hidden text-sm font-medium text-gray-900  group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white  dark:focus:ring-red-400"
                                                        type="button">
                                                        <span
                                                            class="relative flex items-center px-5 w-full py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900  group-hover:bg-opacity-0">
                                                            <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> Eliminar
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="{{ route('trabajador.show', $trabajador->id) }}">
                                                        <button
                                                            class="relative inline-flex items-center justify-center w-full  overflow-hidden text-sm font-medium text-gray-900  group  bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300"
                                                            type="button">
                                                            <span
                                                                class="relative flex items-center px-5 w-full py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900  group-hover:bg-opacity-0">
                                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                                    class="w-4 h-4 mr-2" fill="currentColor"
                                                                    viewBox="0 0 30.000000 30.000000"
                                                                    preserveAspectRatio="xMidYMid meet">

                                                                    <g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)"
                                                                        stroke="none">
                                                                        <path
                                                                            d="M74 225 c-23 -13 -49 -36 -58 -50 -20 -31 -11 -53 41 -92 30 -23 47                -28 93 -28 46 0 63 5 93 28 52 40 62 61 41 92 -23 36 -94 75 -135 75 -19 0
                                        -53 -11 -75 -25z m123 -27 c29 -27 29 -65 1 -95 -27 -29 -65 -29 -95 -1 -29 27 -29 65 -1 95 27 29 65 29 95 1z" />
                                                                        <path
                                                                            d="M124 166 c-10 -26 4 -48 28 -44 17 2 23 10 23 28 0 18 -6 26 -23 28  -13 2 -25 -3 -28 -12z" />
                                                                    </g>
                                                                </svg> Detalles
                                                            </span>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button
                                                        class="relative inline-flex items-center justify-center w-full overflow-hidden text-sm font-medium text-gray-900 rounded-b-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:focus:ring-red-400"
                                                        type="button">
                                                        <span
                                                            class="relative flex items-center px-5 w-full py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-b-md group-hover:bg-opacity-0">
                                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                                class="w-4 h-4 mr-2" fill="currentColor"
                                                                aria-hidden="true" viewBox="0 0 30.000000 30.000000"
                                                                preserveAspectRatio="xMidYMid meet">
                                                                <g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)"
                                                                    stroke="none">
                                                                    <path
                                                                        d="M120 235 c0 -19 -4 -35 -10 -35 -5 0 -10 10 -10 22 0 22 -1 21 -31 -8 -21 -21 -32 -44 -36 -72 -3 -23 -10 -42 -14 -42 -5 0 -9 -6 -9 -13 0 -24 49 -37 140 -37 91 0 140 13 140 37 0 10 -25 13 -110 13 -67 0 -110 4 -110 10 0 6 40 10 101 10 l102 0 -7 33 c-4 17 -20 45 -36 62 -29 28 -30 29 -30 7 0 -12 -4 -22 -10 -22 -5 0 -10 16 -10 35 0 32 -2 35 -30 35 -28 0 -30 -3 -30 -35z" />
                                                                </g>
                                                            </svg> Dotación
                                                        </span>
                                                    </button>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- Delete User Modal -->
    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
        id="delete-user-modal">
        <div class="relative w-full h-full max-w-md px-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-slate-800 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="delete-user-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('trabajador.destroy', $trabajador->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="delete-trabajador-id" name="delete-trabajador-id" value="">
                    <div class="p-6 pt-0 text-center">
                        <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mt-5 mb-6 text-lg text-neutral-800 dark:text-gray-400">¿Desea eliminar al trabajador?
                        </h3>
                        <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                            Segurísimo
                        </button>
                        <a href=""
                            class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            data-modal-toggle="delete-user-modal">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll("[data-modal-toggle='delete-user-modal']");
            const deleteForm = document.getElementById("delete-user-form");
            const deleteClientId = document.getElementById("delete-trabajador-id");

            deleteButtons.forEach((button) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    const clientId = this.getAttribute("data-trabajador-id");
                    deleteClientId.value = clientId;
                    // Mostrar el modal aquí (código para mostrar el modal)
                });
            });
        });
    </script>
@endsection
