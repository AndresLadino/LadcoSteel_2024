@extends('layouts.dashboard-base')
@section('content')
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start border-b shadow-lg justify-between p-5 dark:border-gray-700">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                <span class="underline underline-offset-3 decoration-8 decoration-amber-400 dark:decoration-blue-600">Crear
                    publicación para el blog
                </span>
            </h1>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
            <form action="/produccion" method="POST">
                @csrf
                <div class="grid grid-cols-6 gap-6">                    
                    <div class="col-span-6 sm:col-span-3">
                        <label for="titulo"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                        <input type="text" name="titulo" id="titulo"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Pepito" required>
                    </div>
                    <div class="col-span-6 sm:col-span-3" hidden>
                        <label for="referencia"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referencia</label>
                        <input type="text" name="referencia" id="referencia"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="administrador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Administrador de la producción</label>
                        <select name="administrador" id="administrador" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" disabled selected>Selecciona un administrador para la producción</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                     
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cliente de la producción</label>
                        <select name="cliente" id="cliente" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" disabled selected>Selecciona un cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="estado"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                        <select id="estado" name="estado"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Recibido</option>
                            <option>En producción</option>
                            <option>Finalizado</option>
                            <option>Entregado</option>
                        </select>
                    </div>

                    <div class="col-span-6">
                        <label for="descripcion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                        <textarea id="descripcion" name="descripcion" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Breve descripción del procedimiento a realizar"></textarea>
                    </div>




                </div>
        </div>
        <!-- Modal footer -->
        <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
            <a href="{{ route('produccion.index') }}"
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

            <button type="submit"
                class="text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm rounded-lg px-5 py-2.5 text-center inline-flex items-center mr-2">

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
                </svg>
                Guardar
            </button>

        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
@endsection
