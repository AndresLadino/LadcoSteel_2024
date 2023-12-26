@extends('layouts.dashboard-base')

@section('content')

            @if($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif
    <div class="absolute top-20 right-0 m-4" id="alert" style="display: none;">
        <div class="bg-red-100 border-t-4 border-red-800 rounded-b text-red-900 px-4 py-3 shadow-md transition-opacity"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-red-500 mr-4" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Ooops</p>
                    <p class="text-sm">Las contraseñas no coinciden. Por favor, revisa tus datos.</p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="w-full max-w-md mt-10 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-3xl dark:text-white">
            <span class="underline underline-offset-3 decoration-8 decoration-amber-400 dark:decoration-blue-600">Editar
                información
            </span>
        </h1>
        <form class="max-w-md mx-auto" method="POST" action="/modificarDatos/{{$user->id}}" autocomplete="off">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="relative z-0 w-full mb-8 group">
                <input type="text" name="name" id="nameUser"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-amber-300 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                    placeholder=" " required />
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform translate-y-6 scale-75 top-5 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-amber-600 peer-focus:dark:text-amber-500  peer-focus:scale-75 peer-focus:translate-y-7">Su
                    nombre actual es {{$user->name}}</label>

            </div>

            <div class="relative z-0 w-full mb-8 group">
                <input type="email" name="floating_email" id="emailUser"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-amber-300 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                    placeholder=" " required />
                <label for="emailUser"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo
                    electrónico</label>
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform translate-y-6 scale-75 top-5 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-amber-600 peer-focus:dark:text-amber-500  peer-focus:scale-75 peer-focus:translate-y-7">Su
                    correo electrónico actual es {{$user->email}}</label>
            </div>

            <div class="relative z-0 w-full mb-8 group">
                <input type="password" name="repeat_password" id="floating_repeat_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-amber-300 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                    placeholder=" " required />
                <label for="floating_repeat_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña
                </label>
            </div>
            <div class="relative z-0 w-full mb-8 group">
                
                <input type="password" name="password" id="passUser"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-amber-300 focus:outline-none focus:ring-0 focus:border-amber-300 peer"
                    placeholder=" " required />
                    
                    
                <label for="passUser"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirma
                    tu contraseña</label>
            </div>

            <button type="submit"
                class="text-white bg-amber-400 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Guardar
                cambios</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('passUser');
            const repeatPasswordInput = document.getElementById('floating_repeat_password');
            const errorContainer = document.getElementById('alert');

            function validatePassword() {
                const password = passwordInput.value;
                const repeatPassword = repeatPasswordInput.value;

                if (password !== '' && repeatPassword !== '') {
                    if (password === repeatPassword) {
                        // Contraseñas coinciden, no hay error
                        repeatPasswordInput.setCustomValidity('');
                        errorContainer.style.display = 'none'; // Ocultar el mensaje de error
                    } else {
                        // Contraseñas no coinciden, establecer mensaje de error
                        repeatPasswordInput.setCustomValidity(
                            'Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
                        errorContainer.style.display = 'block'; // Mostrar el mensaje de error
                    }
                } else {
                    // Al menos uno de los campos está vacío, no hay error
                    repeatPasswordInput.setCustomValidity('');
                    errorContainer.style.display = 'none'; // Ocultar el mensaje de error
                }
            }

            // Agregar evento de escucha al cambiar el valor de las contraseñas
            passwordInput.addEventListener('input', validatePassword);
            repeatPasswordInput.addEventListener('input', validatePassword);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('passUser');
            const togglePasswordButton = document.getElementById('togglePassword');
    
            function togglePasswordVisibility() {
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
            }
    
            togglePasswordButton.addEventListener('click', togglePasswordVisibility);
        });
    </script>
@endsection
