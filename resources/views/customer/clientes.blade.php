@extends('layouts.dashboard-base')
@section('css')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css" rel="stylesheet">
@endsection
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
                        clientes
                    </span>
                </h1>
            </div>
            <div class="sm:flex">
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3"><!--data-modal-toggle="add-user-modal"-->
                    <a href="cliente/create">
                        <button
                            class="relative inline-flex items-center justify-center w-2/2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white"
                            type="button">
                            <span
                                class="relative flex items-center px-5 w-full py-2.5 transition-all ease-in duration-75 bg-green-500 text-white dark:bg-gray-900  group-hover:bg-opacity-0">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Añadir cliente
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle p-4">

                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600" id="clientes">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-amber-500 uppercase dark:text-gray-400"
                                    hidden>
                                    ID
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-amber-500 uppercase dark:text-amber-400">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-amber-500 uppercase dark:text-gray-400">
                                    Apellido
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Telefono
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Correo
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Empresa
                                </th>
                                <!-- <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                        Estado
                                                    </th>-->
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                            @foreach ($clientes as $cliente)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="text-base pl-4 font-semibold text-gray-900 dark:text-white" hidden>
                                        {{ $cliente->id }}</td>
                                    <td class="text-base pl-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $cliente->nombre }}</td>
                                    <td class="text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $cliente->apellido }}</td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $cliente->teléfono }}</td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $cliente->correo }}</td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $cliente->empresa }}</td>
                                    <!--
                                            <td class="p-4 space-x-2 whitespace-nowrap">
                                                <a href="cliente/{ $cliente->id }}/edit"><button type="button"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-300 rounded-lg  hover:bg-amber-600 focus:ring-4 focus:ring-amber-300">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Editar
                                                    </button> </a>
                                                <button type="button" data-client-id="{ $cliente->id }}"
                                                    data-modal-toggle="delete-user-modal"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Eliminar
                                                </button>

                                            </td>
                                        -->
                                    <td class="p-4 space-x-2 whitespace-nowrap">

                                        <button id="dropdownDefaultButton-{{ $cliente->id }}"
                                            data-dropdown-toggle="dropdown-{{ $cliente->id }}"
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
                                        <div id="dropdown-{{ $cliente->id }}"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700">
                                            <ul class="text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownDefaultButton-{{ $cliente->id }}">
                                                <li>
                                                    <a href="{{ route('cliente.edit', $cliente->id) }}">
                                                        <button
                                                            class="relative inline-flex items-center justify-center w-full  overflow-hidden text-sm font-medium text-gray-900  group bg-gradient-to-br from-amber-600 to-amber-300 group-hover:from-amber-600 group-hover:to-amber-300 hover:text-white  dark:focus:ring-red-400"
                                                            type="button">
                                                            <span
                                                                class="relative flex items-center px-5 w-full py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900  group-hover:bg-opacity-0">
                                                                <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                                    viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                                    <button data-cliente-id="{{ $cliente->id }}"
                                                        data-modal-toggle="delete-user-modal"
                                                        class="relative inline-flex items-center justify-center w-full overflow-hidden text-sm font-medium text-gray-900 rounded-b-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:focus:ring-red-400"
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
                <div class="p-6 pt-0 text-center">
                    <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mt-5 mb-6 text-lg text-neutral-800 dark:text-gray-400">¿Desea eliminar el cliente?</h3>
                    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="delete-client-id" name="delete-client-id" value="">
                        <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                            Segurísimo
                        </button>
                        <a href="#"
                            class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            data-modal-toggle="delete-user-modal">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
    <script type="text/javascript" src="https://cdn.tailwindcss.com/"></script>

    <script type="text/javascript">
        $('#clientes thead th').css('background-color', 'rgb(10 10 10)');
        $('#clientes thead th').css('color', 'rgb(252 211 77)')
        new DataTable('#clientes', {
            "oLanguage": {
                "sInfo": "Mostrando <span class='font-bold'>(_START_-_END_)</span> de <span class='font-bold'>_TOTAL_</span>",
                "oPaginate": {
                    "sNext": "<p class='text-white'>.</p> <svg class='w-6 h-6 ' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path> </svg>",
                    "sPrevious": "<p class='text-white'>.</p> <svg class='w-5 h-5 ' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg> "
                },

            },
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',

            },
        });
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll("[data-modal-toggle='delete-user-modal']");
            const deleteForm = document.getElementById("delete-user-form");
            const deleteClientId = document.getElementById("delete-client-id");

            deleteButtons.forEach((button) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    const clientId = this.getAttribute("data-cliente-id");
                    deleteClientId.value = clientId;

                    // Código para mostrar el modal aquí (puedes agregar tu lógica para mostrar el modal)
                });
            });
        });
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var alert = document.getElementById("alert");

            setTimeout(function() {
                // Agrega una clase "ocultar" al elemento para ocultarlo
                alert.style.display = "none";

            }, 4000); // 4000ms = 4 segundos
        });
    </script>
@endsection

@endsection
