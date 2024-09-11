<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teen Community</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.navbar') <!-- Include the navbar -->

    <main>
        @yield('content')
    </main>

    @include('partials.footer') <!-- Include the footer -->

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
<div class="relative ml-4">  
                <button class="flex items-center justify-between bg-blue-700 px-3 py-2 rounded focus:outline-none" id="userDropdown" onclick="toggleDropdown()">  
                    {{ Auth::user()->name }} ({{ Auth::user()->role }})  
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>  
                </button>  
                <div id="dropdownMenu" class="hidden absolute right-0 w-48 bg-white text-gray-800 shadow-md mt-2 rounded">  
                    <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-200">Logout</a>  
                    <a href="{{ route('profile.update') }}" class="block px-4 py-2 hover:bg-gray-200">Update</a>  
                    <form action="{{ route('user.delete', Auth::id()) }}" method="POST" class="inline">  
                        @csrf  
                        <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">Delete Account</button>  
                    </form>  
                </div>  
            </div>  