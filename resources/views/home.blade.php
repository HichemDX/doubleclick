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

<body class="">
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
              <a href="/" class="block py-2 pl-3 pr-4 text-white bg-[#206857] rounded md:bg-transparent md:text-[#206857] md:p-0 md:dark:text-[#206857] dark:bg-[#206857] md:dark:bg-transparent" aria-current="page">Home</a>
            </li>

            <li>
              <a href="/services" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#206857] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
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
      <div class="p-4 w-3/4 ">
        <h1 class="text-3xl pb-20 pt-10 text-[#206857]">Welcom  {{ Auth::user()->name }} </h1>

        <p class="mb-3 shadow-xl rounded-2xl p-10 text-left text-gray-500 dark:text-gray-400">The DoubleClick programmer team is a highly skilled and experienced group of professionals who work on developing and maintaining the DoubleClick program. This team is responsible for the design, development, and implementation of the software that powers DoubleClick's advertising platform. They work together to ensure that the software is reliable, efficient, and user-friendly. The team members are proficient in programming languages such as Java, C++, and Python, and they possess in-depth knowledge of various software development methodologies, tools, and frameworks. With their expertise and dedication, the DoubleClick programmer team is instrumental in delivering innovative solutions that help businesses to reach their advertising goals.</p>

      </div>

    </center>
  </div>
  </div>

</body>

</html>