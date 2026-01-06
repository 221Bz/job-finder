<x-app-layout>
    <div class="bg-cover bg-center p-5 rounded ml" style="background-color: #142D68">
        <h1 class="text-5xl font-black text-white transition-transform duration-200 hover:scale-105">
            {{ __('Find Your Job') }}
        </h1>
        <div class="text-white flex flex-col space-y-2">
            <span>Discover the right job and start your career journey.</span>
        </div>

        <div class="px-2 py-3">
            <!-- Search Bar and Buttons -->
            <div class="flex items-center gap-4 mb-6 w-full">
                <!-- Search Bar (Full Width) -->
                <div class="relative w-full md:w-3/4 transition-transform duration-200 hover:scale-105">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </div>
                    <input type="text" id="searchInput" placeholder="Cari pekerjaan..." class="pl-10 pr-4 py-2 w-full border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Dropdown Filter -->
                <div class="relative inline-block text-left transition-transform duration-200 hover:scale-105" x-data="{ open: false }">
                    <x-secondary-button @click="open = !open" class="inline-flex justify-center w-auto rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-blue-500 text-sm font-medium text-black hover:bg-blue-400 focus:outline-none">
                        Filter
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </x-secondary-button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="origin-top-left absolute left-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <button @click="open = false; filterPekerjaan('all')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Semua</button>
                            <button @click="open = false; filterPekerjaan('full time')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Full time</button>
                            <button @click="open = false; filterPekerjaan('part time')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Part time</button>
                        </div>
                    </div>
                </div>

                <!-- Notification Bell -->
                <div class="flex items-center transition-transform duration-200 hover:scale-105">
                    <a href="{{ route('notification.index') }}">
                        <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="py-4">
        @if(!auth()->check())
            @foreach($jobfinders as $jobfinder)
            <div class="flex flex-col md:flex-row bg-white overflow-hidden shadow-sm sm:rounded-lg searchable-card mb-6 transition transform hover:shadow-lg hover:scale-[1.01]" data-kategori="{{ strtolower($jobfinder->job_type) }}">
                <div class="p-6 text-gray-900 md:w-2/3 order-1 md:order-2">
                        @if ($jobfinder->logo)
                            <img src="{{ Storage::url($jobfinder->logo) }}" width="150" class="mb-2">
                        @endif
                        <hr>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9l-4.95 4.95-4.95-4.95a7 7 0 010-9.9zm4.95 3a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                            </svg>
                            {{ $jobfinder->location }}
                        </div>
                        <br><b>{{ $jobfinder->company }} | <font color="blue">{{ $jobfinder->job_title }}</font></b></br>
                        {{ $jobfinder->notes }}
                        <br><b>Details:</b></br>
                        >{{ $jobfinder->age }} years old
                        <br>{{ $jobfinder->salary }}</br>
                        {{ $jobfinder->job_type }}
                        <br>
                    </div>
                    @if ($jobfinder->map_url)
                        <div class="p-6 md:w-1/3 p-4">
                            <iframe src="{{ $jobfinder->map_url }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
            <br>


        @elseif(auth()->user()->hasRole('Admin'))
            <div class="text-right mb-2">
                <a href="{{ route('jobfinder.create') }}">
                    <x-secondary-button>Add company</x-secondary-button>
                </a>
            </div>
            @foreach($jobfinders as $jobfinder)
                <div class="flex flex-col md:flex-row bg-white overflow-hidden shadow-sm sm:rounded-lg searchable-card mb-6" data-kategori="{{ strtolower($jobfinder->job_type) }}">
                    <div class="p-6 text-gray-900 md:w-1/2 order-1 md:order-2">
                        @if ($jobfinder->logo)
                            <img src="{{ Storage::url($jobfinder->logo) }}" width="150" class="mb-2">
                        @endif
                        <hr>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9l-4.95 4.95-4.95-4.95a7 7 0 010-9.9zm4.95 3a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                            </svg>
                            {{ $jobfinder->location }}
                        </div>
                        <br>
                            <form action="{{ route('jobfinder.destroy', $jobfinder->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <x-danger-button class="transition-transform duration-200 hover:scale-105">Delete</x-danger-button>
                            </form>
                    </div>
                    @if ($jobfinder->map_url)
                        <div class="p-6 md:w-1/2 p-4">
                            <iframe src="{{ $jobfinder->map_url }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
            <br>


        @elseif(auth()->user()->hasRole('Perusahaan'))
            @foreach($jobfinders as $jobfinder)
                <div class="flex flex-col md:flex-row bg-white overflow-hidden shadow-sm sm:rounded-lg searchable-card mb-6" data-kategori="{{ strtolower($jobfinder->job_type) }}">
                    <div class="p-6 text-gray-900 md:w-1/2 order-1 md:order-2">
                        @if ($jobfinder->logo)
                            <img src="{{ Storage::url($jobfinder->logo) }}" width="150" class="mb-2">
                        @endif
                        <hr>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9l-4.95 4.95-4.95-4.95a7 7 0 010-9.9zm4.95 3a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                            </svg>
                            {{ $jobfinder->location }}
                        </div>
                        <br><b>{{ $jobfinder->company }} | <font color="blue">{{ $jobfinder->job_title }}</font></b></br>
                        {{ $jobfinder->notes }}
                        <br><b>Details:</b></br>
                        >{{ $jobfinder->age }} years old
                        <br>{{ $jobfinder->salary }}</br>
                        {{ $jobfinder->job_type }}
                        <br>
                            <x-secondary-button class="mt-4 transition-transform duration-200 hover:scale-105">
                                <a href="{{ route('jobfinder.edit', $jobfinder->id) }}">Edit</a>
                            </x-secondary-button>
                    </div>
                    @if ($jobfinder->map_url)
                        <div class="p-6 md:w-1/2 p-4">
                            <iframe src="{{ $jobfinder->map_url }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
            <br>


        @elseif(auth()->user()->hasRole('Pekerja'))
        <div class="text-right mb-2">
                <a href="{{ route('notification.create') }}">
                    <x-secondary-button>Apply company</x-secondary-button>
                </a>
            </div>
            @foreach($jobfinders as $jobfinder)
                <div class="flex flex-col md:flex-row bg-white overflow-hidden shadow-sm sm:rounded-lg searchable-card mb-6" data-kategori="{{ strtolower($jobfinder->job_type) }}">
                    <div class="p-6 text-gray-900 md:w-1/2 order-1 md:order-2">
                        @if ($jobfinder->logo)
                            <img src="{{ Storage::url($jobfinder->logo) }}" width="150" class="mb-2">
                        @endif
                        <hr>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9l-4.95 4.95-4.95-4.95a7 7 0 010-9.9zm4.95 3a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                            </svg>
                            {{ $jobfinder->location }}
                        </div>
                        <br><b>{{ $jobfinder->company }} | <font color="blue">{{ $jobfinder->job_title }}</font></b></br>
                        {{ $jobfinder->notes }}
                        <br><b>Details:</b></br>
                        >{{ $jobfinder->age }} years old
                        <br>{{ $jobfinder->salary }}</br>
                        {{ $jobfinder->job_type }}
                        <br>
                            <x-primary-button class="mt-4 transition-transform duration-200 hover:scale-105">
                                <a href="{{ $jobfinder->contact }}" target="_blank"><font color="#FFFFFF">Contact</font></a>
                            </x-primary-button>
                    </div>
                    @if ($jobfinder->map_url)
                        <div class="p-6 md:w-1/2 p-4">
                            <iframe src="{{ $jobfinder->map_url }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
            <br>
        @endif
    </div>

    <script>
    // Search
    document.getElementById('searchInput').addEventListener('input', function () {
        const query = this.value.toLowerCase();
        const cards = document.querySelectorAll('.searchable-card');

        cards.forEach(card => {
            const text = card.textContent.toLowerCase();
            card.classList.toggle('hidden', !text.includes(query));
        });
    });

    // Filter
    function filterPekerjaan(kategori) {
        const cards = document.querySelectorAll('.searchable-card');

        cards.forEach(card => {
            const cardKategori = card.getAttribute('data-kategori');
            const show = kategori === 'all' || cardKategori === kategori;
            card.classList.toggle('hidden', !show);
        });
    }
</script>
</x-app-layout>
