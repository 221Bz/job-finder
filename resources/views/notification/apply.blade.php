<x-app-layout>
    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ isset($notification) ? route('notification.update', $notification->id) : route('notification.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   @if(isset($notification))
                       @method('PUT')
                   @endif

                   <div class="mb-4">
                       <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                       <input type="text" id="company" name="company" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('company', $notification->company ?? '') }}" placeholder="Company name" required>
                       @error('company')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="job_title" class="block text-sm font-medium text-gray-700">Job title</label>
                       <input type="text" id="job_title" name="job_title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('job_title', $notification->job_title ?? '') }}" placeholder="Job title" required>
                       @error('job_title')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                       <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $notification->name ?? '') }}" placeholder="Your name" required>
                       @error('name')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                       <input type="text" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email', $notification->email ?? '') }}" placeholder="Your email" required>
                       @error('email')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="contact_user" class="block text-sm font-medium text-gray-700">Contact</label>
                       <input type="text" id="contact_user" name="contact_user" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('contact_user', $notification->contact_user ?? '') }}" placeholder="Your contact number" required>
                       @error('contact')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                        <label for="cv" class="block text-sm font-medium text-gray-700">Upload CV (PDF only)</label>
                        <input type="file" id="cv" name="cv" class="mt-1 block w-full border-gray-300 shadow-sm" placeholder="Upload CV (PDF only)">
                        @error('cv')
                            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                        @enderror

                        @if(isset($notification->cv))  <!-- Menampilkan gambar lama jika ada -->
                            <img src="{{ asset('storage/' . $jobfinder->cv) }}" width="120">
                        @endif
                    </div>

                   <x-primary-button class="mt-2">
                       {{ isset($notification) ? 'Update' : 'Apply' }}
                   </x-primary-button>
              </form>
            </div>
         </div>
     </div>
</x-app-layout>
