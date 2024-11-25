<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-blue-900 shadow @guest mb-8 @endguest py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        @auth
            <div class="flex h-screen">
                <!-- Sidebar -->
                <aside class="w-64 bg-gray-800 text-gray-200">
                    <!-- <div class="flex justify-center py-4">
                        <h1 class="text-2xl font-semibold text-white">Manage Projects</h1>
                    </div> -->
                    <nav class="mt-6">
                        <ul>
                            <li>
                                <a href="#" class="block py-3 px-6 hover:bg-gray-700">User Management</a>
                            </li>
                            <li>
                                <a href="#" class="block py-3 px-6 hover:bg-gray-700">Project Management</a>
                            </li>
                            <li>
                                <a href="#" class="block py-3 px-6 hover:bg-gray-700">Flow Diagram Management</a>
                            </li>
                            <li>
                                <a href="#" class="block py-3 px-6 hover:bg-gray-700">Approval Management</a>
                            </li>
                            <li>
                                <a href="#" class="block py-3 px-6 hover:bg-gray-700">System Configuration and Maintenance</a>
                            </li>
                        </ul>
                    </nav>
                </aside>
                @yield('dashboard')
            </div>
        @endauth
    </div>
    @yield('content')
</body>
</html>
