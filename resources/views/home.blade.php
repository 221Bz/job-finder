<x-app-layout>
    <div class="flex items-center p-5 rounded bg-cover bg-center" style="background-color: #FFFFFF; background-size: cover;">
        <div class="w-1/2 pl-8" style="line-height: 1.2;">
            <h1 class="text-5xl font-black transition-transform duration-200 hover:scale-105" style="color: #1C3D84;">
                {{ __('JobFinder') }}
            </h1>
            <div style="color: black;">
                <span>Your solution for finding jobs</span><br>
                <span>that match your skills and dreams.</span>
            </div>
            <br>
            <a href="{{ route('explore') }}">
                <x-primary-button class="bg-white; text-black transition-transform duration-200 hover:scale-105">See more</x-primary-button>
            </a>
        </div>

        <div class="w-1/2">
            <img src="{{ asset('images/jobfindericon.png') }}" alt="JobFinder" class="w-60 h-auto m-auto object-cover rounded transition-transform duration-200 hover:scale-105">
        </div>
    </div>

    <div class="py-2">
        <div class="p-5 rounded" style="background-color: #021024; background-size: cover;">
            <div class="flex items-start justify-between p-6 text-white">
                <!-- Left Column: Ready to Grow -->
                <div class="w-1/3 text-left">
                    <h2 class="text-xl font-bold">Ready to Grow?</h2>
                    <div style="color: white;">
                        <span>Find roles that challenge</span><br>
                        <span>and elevate your skills.</span>
                    </div>
                </div>

                <!-- Middle Column: Our Features -->
                <div class="w-1/3 text-left mt-0">
                    <h2 class="text-xl font-bold">Our Features</h2>
                    <div class="text-[#C1E8FF]" style="line-height: 1.5;">
                        <p class="transition-transform duration-200 hover:scale-105">Filtering</p>
                        <p class="transition-transform duration-200 hover:scale-105">Searching</p>
                        <p class="transition-transform duration-200 hover:scale-105">Job Notification</p>
                    </div>
                </div>

                <!-- Right Column: Image -->
                <div class="w-1/3 flex flex-col justify-start text-right" style="line-height: 1.5;">
                    @auth
                    <h2 class="text-2xl font-bold transition-transform duration-200 hover:scale-105">Welcome back,<br>
                        <span>{{ Auth::user()->name }}!</span></h2>
                    @else
                    <h2 class="text-2xl font-bold transition-transform duration-200 hover:scale-105">Welcome to<br>
                        <span>JobFinder!</span></h2>
                        <p class="text-sm mb-4">
                        Discover thousands of jobs tailored<br>
                        to your skills and interests.</p>
                        <a href="{{ route('register') }}">
                            <x-secondary-button class="bg-white; text-black transition-transform duration-200 hover:scale-105">Get started</x-primary-button>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>