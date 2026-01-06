<nav x-data="{ open: false }" class="fixed h-full w-64 bg-white border-r shadow z-20">
    <b>
    <div class="flex flex-col justify-between h-full p-4">

        <!-- TOP SECTION -->
        <div class="space-y-6">
            <!-- Logo -->
            <div class="flex items-center justify-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/jobfindertext.png') }}" alt="JobFinder" class="h-8 w-auto transition-transform duration-200 hover:scale-105">
                </a>
            </div>

            <hr>

            <!-- Navigation Links -->
            <nav class="flex flex-col space-y-2">

                <!-- Home -->
                <a href="{{ route('home') }}" class="flex items-center px-4 py-2 rounded-full 
                    {{ request()->routeIs('home') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}
                     transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-home mr-3"></i>
                    Home
                </a>

                <!-- explore -->
                <a href="{{ route('explore') }}" class="flex items-center px-4 py-2 rounded-full 
                    {{ request()->routeIs('explore') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}
                     transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-search mr-3"></i>
                    Explore
                </a>

                <!-- Highlight -->
                <a href="{{ route('news') }}" class="flex items-center px-4 py-2 rounded-full 
                    {{ request()->routeIs('news') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}
                     transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-newspaper mr-3"></i>
                    News
                </a>

                <!-- About Us -->
                <a href="{{ route('aboutus') }}" class="flex items-center px-4 py-2 rounded-full 
                    {{ request()->routeIs('aboutus') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}
                     transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-users mr-3"></i>
                    About Us
                </a>

                @if(auth()->check() && auth()->user()->role_id === 1)
                <a href="{{ route('user.index') }}" class="flex items-center px-4 py-2 rounded-full 
                    {{ request()->routeIs('user.index') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}
                     transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-user mr-3"></i>
                    Users
                </a>
                @endif
            </nav>
        </div>

        <!-- BOTTOM SECTION (Auth Controls) -->
        <div class="space-y-2 px-4 py-2">
            <div class="flex flex-col px-4 py-2">
            @guest
                <a href="{{ route('register') }}" class="mb-2 transition-transform duration-200 hover:scale-105">
                <i class="fas fa-user-alt mr-2"></i> 
                {{ __('Register') }}
                </a>
            @endguest

            @guest
                <a href="{{ route('login') }}" class="mb-2 transition-transform duration-200 hover:scale-105">
                <i class="fas fa-sign-in-alt mr-2"></i> 
                {{ __('Login') }}
                </a>
            @endguest
            </div>


            @auth
                <a href="{{ route('profile.edit') }}" class="block text-center px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded hover:bg-gray-200 transition-transform duration-200 hover:scale-105">
                <div>{{ Auth::user()->name }}</div>
                </a>

                <form method="POST" action="{{ route('logout') }}" type="submit">
                    @csrf
                    <button type="submit" class="text-center text-sm text-gray-700 w-full transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    {{ __('Logout') }}
                    </button>
                </form>
            @endauth
        </div>
    </div>
    </b>
</nav>
