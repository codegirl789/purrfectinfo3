<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Purrfect Info</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

    <livewire:styles />

    @vite(['resources/css/app.css'])

</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">

    <div class="container mx-auto md:w-11/12 md:sticky md:top-0 bg-white z-50 shadow-sm px-4 rounded-b-2xl">
        <header class=" flex flex-col md:flex-row items-center justify-between py-2">
            <a href="#" class="font-semibold text-xl leading-10 uppercase">
                PURRFECTINFO
            </a>

            <div class="flex items-center mt-2 md:mt-0">
                <a href="#"
                    class="ml-4 font-semibold text-gray-600 focus:outline focus:outline-2
                    focus:rounded-sm focus:outline-blue-500">Home</a>
                <a href="#"
                    class="ml-4 font-semibold text-gray-600 focus:outline focus:outline-2
                    focus:rounded-sm focus:outline-blue-500">Services</a>
                <a href="#"
                    class="ml-4 font-semibold text-gray-600 focus:outline focus:outline-2
                    focus:rounded-sm focus:outline-blue-500">Shop</a>
                <a href="#"
                    class="ml-4 font-semibold text-gray-600 focus:outline focus:outline-2
                    focus:rounded-sm focus:outline-blue-500">About
                    Us</a>
                <a href="#"
                    class="ml-4 font-semibold text-gray-600 focus:outline focus:outline-2
                    focus:rounded-sm focus:outline-blue-500">Contact
                    Us</a>
            </div>

            <div class="flex items-center mt-2 md:mt-0">
                @if (Route::has('login'))
                    <div class="p-0 text-right flex items-center space-x-4">
                        @auth
                            <!-- Authentication -->
                            <a href="#">
                                <img src="https://i.pravatar.cc/60" alt="avatar" class="w-10 h-10 rounded-full">
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              this.closest('form').submit();"
                                    class="font-semibold text-gray-600 focus:outline focus:outline-2 hover:text-blue focus:rounded-sm focus:outline-blue-500 ">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Log
                                    in</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif


            </div>
        </header>
    </div>

    <main class="container md:w-11/12  w-11/12 gap-x-6 mx-auto flex flex-col md:flex-row md:my-4">
        <div class="md:w-1/4 mx-auto md:mx-0  w-full blue">
            <div class=" md:sticky md:top-20  md:mt-2 mt-2">
                <div class="bg-white border-2 border-blue shadow rounded-b-lg"
                    style="
  border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
    border-image-slice: 1;
    background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
    background-origin: border-box;
    background-clip: content-box, border-box;
">


                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">
                            Add Post
                        </h3>
                        <p class="text-xs mt-4">
                            @auth
                                Let us know what you would like and we'll take a look over!
                            @else
                                Please login to create an idea.
                            @endauth
                        </p>
                    </div>

                    @auth
                        {{-- <livewire:create-idea /> --}}
                        {{-- @livewire('create-idea') --}}
                        <div class="p-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptate, ullam harum at ad
                            neque
                            non cum cumque aspernatur officiis dolore odio, natus labore optio et. Repudiandae
                            necessitatibus
                            totam quam.
                        </div>
                    @else
                        <div class="flex flex-col px-5 pb-4 space-y-2">
                            <a href="{{ route('login') }}"
                                class="text-center bg-blue text-white rounded-xl text-sm px-4 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
                                Login
                            </a>

                            <a href="{{ route('register') }}"
                                class="text-center bg-gray-300 rounded-xl text-sm px-4 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
                                Register
                            </a>
                        </div>
                    @endauth
                </div>

                <div class="bg-white  shadow rounded-lg md:mt-5 my-2" style="
                ">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">
                            Popular Posts
                        </h3>
                    </div>
                    <div class="flex flex-col px-5 pb-4 space-y-2">
                        @foreach ($sidebar_posts->take(6) as $post)
                            <a href="{{ route('posts.show', $post->id) }}"
                                class=" bg-gray-50 rounded-xl text-sm px-4 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
                                {{ $post->title }} <i class="fa-solid fa-up-right-from-square"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
        <div class="md:w-3/4 w-full mt-2">
            <div class="mt-0">
                {{ $slot }}
            </div>
        </div>
    </main>


    <livewire:scripts />
</body>

</html>
