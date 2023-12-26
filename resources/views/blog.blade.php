@extends('layouts.base')
@section('content')
    <main>
        <section
            class="bg-amber-500 bg-opacity-100 bg-fixed bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80')]  bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">

                <h1
                    class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white">
                    Noticias
                </h1>
            </div>
        </section>
        <section class="w-9/12 mx-auto">
            <div class="h-auto">
                <h1 class="mt-6 text-4xl font-extrabold tracking-tight leading-none text-slate-950 md:text-4xl lg:text-5xl">
                    <span
                        class=" mt-6 text-5xl font-extrabold tracking-tight leading-none  text-transparent bg-clip-text bg-gradient-to-r to-amber-500 from-amber-300">Lo
                        último de Ladco
                        Steel</span>
                </h1>
                <!--Desde acá -->
               
                
                <div class="flex flex-wrap -mx-3 mb-6 mt-12">
                     
                    
                    @foreach ($posts as $post)
                    <div class="w-3/3 mt-4 md:w-1/3 xl:w-1/3 px-3 ">
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route('post.show', ['id' => $post->id]) }}">
                                <img class="rounded-t-lg h-64 w-full"
                                src="/images/blog/{{ $post->imagenFondo }}"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="{{ route('post.show', ['id' => $post->id]) }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                        {{ $post->titulo }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 overflow-hidden text-ellipsis">{{ Str::limit($post->parrafoPrincipal, 200) }}</p>
                                <a href="{{ route('post.show', ['id' => $post->id]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-400 rounded-lg hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-500">
                                    Leer más
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div> 
                        
                    @endforeach
                </div>
            </div>

            </div>
        </section>
    </main>
@endsection
