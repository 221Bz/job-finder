<x-app-layout>
    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
              <form action="{{ isset($jobfinder) ? route('jobfinder.update', $jobfinder->id) : route('jobfinder.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   @if(isset($jobfinder))
                       @method('PUT')
                   @endif
                   <div class="mb-4">
                        <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                        <input type="file" id="logo" name="logo" class="mt-1 block w-full border-gray-300 shadow-sm" placeholder="Company logo">
                        @error('logo')
                            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                        @enderror

                        @if(isset($jobfinder->logo))  <!-- Menampilkan gambar lama jika ada -->
                            <img src="{{ asset('storage/' . $jobfinder->logo) }}" width="120">
                        @endif
                    </div>

                    <div class="mb-4">
                       <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                       <input type="text" id="company" name="company" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('company', $notification->company ?? '') }}" placeholder="Company name" required>
                       @error('company')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                       <input type="text" id="location" name="location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('location', $jobfinder->location ?? '') }}" placeholder="Company location" required>
                       @error('location')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                    <div class="mb-4">
                       <label for="map_url" class="block text-sm font-medium text-gray-700">Map</label>
                       <input type="text" id="map_url" name="map_url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('map_url', $jobfinder->map_url ?? '') }}" placeholder="Map URL" required>
                       @error('map_url')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                       <input type="text" id="contact" name="contact" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('contact', $jobfinder->contact ?? '') }}" placeholder="Company contact" required>
                       @error('contact')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <x-primary-button>
                       {{ isset($jobfinder) ? 'Update' : 'Add' }}
                   </x-primary-button>
              </form>
            </div>
         </div>
     </div>
</x-app-layout>
