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
    <div class="bg-stone-100 h-full">

        <div class="flex h-screen">
            <!-- Primer grid -->
            <div class="w-4/6  flex flex-col p-8 text-center ">
                <!--Tarjeta-->
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-6xl ">


                    <div class="flex flex-col p-8 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ¡Que bueno tenerte de vuelta, @auth
                                {{ Auth::user()->name }}!
                            @endauth
                        </h5>

                        <p id="fraseMostrada" class="mb-3 text-lg font-semibold text-gray-700 dark:text-gray-400"></p>
                        <div></div>
                    </div>
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-[15rem] md:w-full md:rounded-none md:rounded-s-lg"
                        src="{{ URL::asset('/images/bienvenida.svg') }}" alt="" style="transform: scaleX(-1)">
                </div>
                <!--Tarjetas 3-->
                <div class="px-2 mt-10">
                    <div class="flex -mx-2">
                        <div class="w-1/3 px-2">
                            <div
                                class="bg-[#fee3ac] h-96 rounded-md shadow-xl transition ease-in-out delay-80 hover:scale-105 pt-10">
                                <h1 class="text-2xl font-bold tracking-tight text-gray-900">La pregunta del día de hoy es...
                                </h1>
                                <div id="question-container"
                                    class="mt-20 text-lg font-semibold text-gray-700 dark:text-gray-400">
                                    <!-- La pregunta se mostrará aquí -->
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3 px-2">
                            <div
                                class="bg-[#fbb737] h-96 rounded-md shadow-xl transition ease-in-out delay-80 hover:scale-105 p-3">
                                clima</div>
                        </div>
                        <div class="w-1/3 px-2">
                            <div
                                class="bg-[#fddb94] h-96 rounded-md shadow-xl transition ease-in-out delay-80 hover:scale-105 p-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Segundo grid -->
            <div class="w-2/6 bg-zinc-100 flex flex-col  p-8 text-center ">
                <blockquote class="max-w-2xl  mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Nuestros últimos clientes</h3>
                </blockquote>
                <!--Clientes-->
                <figcaption class="flex items-center justify-center">
                    <!--<div
                                class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex items-center justify-between mb-4">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Hemos trabajado con...
                                    </h5>
                                </div>
                                <div class="flow-root">
                                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center">
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Neil Sims
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        email@windster.com
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center ">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                                                </div>
                                                <div class="flex-1 min-w-0 ms-4">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Bonnie Green
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        email@windster.com
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    $3467
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="/docs/images/people/profile-picture-2.jpg" alt="Michael image">
                                                </div>
                                                <div class="flex-1 min-w-0 ms-4">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Michael Gough
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        email@windster.com
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    $67
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center ">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="/docs/images/people/profile-picture-4.jpg" alt="Lana image">
                                                </div>
                                                <div class="flex-1 min-w-0 ms-4">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Lana Byrd
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        email@windster.com
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    $367
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pt-3 pb-0 sm:pt-4">
                                            <div class="flex items-center ">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="/docs/images/people/profile-picture-5.jpg" alt="Thomas image">
                                                </div>
                                                <div class="flex-1 min-w-0 ms-4">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Thomes Lean
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        email@windster.com
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    $2367
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                    <div
                        class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Hemos trabajado con...
                            </h5>
                        </div>
                        <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($clientes as $cliente)
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center">
                                            <div class="flex-1 min-w-0">
                                                <h1
                                                    class="text-sm text-gray-600 ">
                                                    Hace poco trabajamos con <span
                                                        class="text-sm font-medium text-gray-900 ">{{ $cliente['nombre'] }}</span>,
                                                    de la empresa <span
                                                        class="text-sm font-medium text-amber-500 ">{{ $cliente['empresa'] }}</span>
                                                </h1>
                                                <p class="text-sm text-gray-400">Datos de contacto: <span class="text-sm text-gray-500 ">{{ $cliente['correo'] }} </span>, número telefónico <span class="text-sm text-gray-500 ">{{ $cliente['telefono'] }} </span>.</p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </figcaption>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        var frasesInspiradoras = [
            "La perseverancia es la clave del éxito. 🚀",
            "El único modo de hacer un gran trabajo es amar lo que haces. ❤️",
            "La vida es lo que pasa mientras estás ocupado haciendo otros planes. 🌍",
            "El éxito es 99% fracaso. 💪",
            "Cree que puedes y estás a medio camino. 🌟",
            "La única manera de hacer un gran trabajo es amar lo que haces. 💼",
            "Nunca te rindas. Grandes cosas llevan tiempo. ⏳",
            "El éxito no es la clave de la felicidad. La felicidad es la clave del éxito. Si amas lo que haces, tendrás éxito. 😊",
            "La oportunidad puede encontrar a aquellos que están listos. 🚪",
            "El único lugar donde el éxito viene antes que el trabajo es en el diccionario. 📖",
            "La única limitación es la que te pones a ti mismo. 🚫",
            "Haz hoy lo que otros no quieren, haz mañana lo que otros no pueden. 🌅",
            "Cada logro comienza con la decisión de intentarlo. 👣",
            "El único modo de hacer un gran trabajo es amar lo que haces. 💖",
            "No importa lo lento que vayas, siempre y cuando no te detengas. 🏃‍♂️",
            "La vida es 10% lo que nos pasa y 90% cómo reaccionamos ante ello. 🤔",
            "El éxito es la suma de pequeños esfuerzos repetidos día tras día. 🌟",
            "La magia está en ti. ✨",
            "No busques el éxito. Busca ser valioso y el éxito vendrá naturalmente. 🌱",
            "La disciplina es el puente entre metas y logros. 🌉"
        ];


        function obtenerFraseAleatoria() {
            var indiceAleatorio = Math.floor(Math.random() * frasesInspiradoras.length);
            return frasesInspiradoras[indiceAleatorio];
        }

        document.addEventListener("DOMContentLoaded", function() {
            var fraseMostrada = document.getElementById("fraseMostrada");
            fraseMostrada.textContent = obtenerFraseAleatoria();
        });

        var preguntas = [
            "¿Cuál es tu mayor logro hasta ahora? 🏆",
            "¿Qué aprendizaje importante obtuviste hoy? 🧠",
            "¿En qué aspecto puedes mejorar? 💪",
            "¿Cuál es tu mayor miedo y cómo puedes superarlo? 😨",
            "¿Qué consejo te darías a ti mismo/a hace 5 años? 🕰️",
            "¿Cuál es tu objetivo más importante a corto plazo? 🥇",
            "¿Cómo defines el éxito? 🌟",
            "¿Qué actividades te dan más energía y cuáles te la quitan? ⚡",
            "¿Cuál es tu mayor fortaleza personal? 💪",
            "¿En qué situación te has sentido más orgulloso/a de ti mismo/a? 😊",
            "¿Qué hábito te gustaría desarrollar para mejorar tu vida? 🔄",
            "¿Qué te inspira y motiva en la vida? 🚀",
            "¿Cómo manejas el estrés y la presión? ⏳",
            "¿Cuál es tu mayor sueño o aspiración? 💭",
            "¿Cómo te visualizas a ti mismo/a en el futuro? 🔮",
            "¿Qué significa para ti vivir una vida significativa? ❤️",
            "¿Qué cambios pequeños puedes hacer hoy para mejorar tu mañana? 🌅",
            "¿Cuál es tu filosofía de vida? 🤔",
            "¿Qué te hace sentir agradecido/a en este momento? 🙏",
            "¿Qué lección importante has aprendido de un desafío reciente? 🚧",
        ];


        // Función para obtener una pregunta aleatoria
        function obtenerPreguntaAleatoria() {
            var indiceAleatorio = Math.floor(Math.random() * preguntas.length);
            return preguntas[indiceAleatorio];
        }

        // Función para mostrar la pregunta en el contenedor
        function mostrarPregunta() {
            var preguntaContainer = document.getElementById("question-container");
            preguntaContainer.textContent = obtenerPreguntaAleatoria();
        }

        // Llamada inicial para mostrar la primera pregunta al cargar la página
        mostrarPregunta();
    </script>
@endsection
