<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>DoubleClick</title>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <style>
    body {
      font-family: 'Lato', sans-serif;
    }
  </style>
  <!-- Scripts -->
  @vite( 'resources/js/app.js')
</head>

<body class="overflow-hidden">
  <div id="app">

    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 shadow-lg  w-screen h-26">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
          <img src="{{ asset('images/logosansbg.png') }}" alt="#" class="h-20 w-20 p-4">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">DoubleClick</span>
        </a>

        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="/" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#206857] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
            </li>

            <li>
              <a href="/services" class="block py-2 pl-3 pr-4 text-[#206857] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#206857] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#206857] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                <div>
                  <!-- Authentication Links -->
                  <!-- Right Side Of Navbar -->
                  <!-- <ul class="navbar-nav ml-auto"> -->
                  <!-- Authentication Links -->
                  <!-- @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else -->
                  <!-- <a id="navbarDropdown" class="" href="#">
                        {{ Auth::user()->name }}
                      </a> -->

                  <!-- </div>
                    </li> -->
                  <!-- @endguest -->
                  <!-- </ul> -->

                  <a class=" bg-[#39B498] text-white p-2 pr-4 pl-4 rounded-full hover:bg-[#206857]" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                  </form>
                </div>


              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <center>
      <div class="p-4 w-3/4 pt-20">
        <img src="{{ asset('images/logosansbg.png') }}" alt="#" class="h-40 w-40 p-4">

        <h1 class="text-5xl text-gray-500 pt-10" >Coming Soon ...</h1>
        <div>

        </div>
      </div>

    </center>
  </div>
  </div>

</body>

</html>