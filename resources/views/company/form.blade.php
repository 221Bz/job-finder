<x-app-layout>
    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
              <form action="{{ isset($jobfinder) ? route('jobfinder.update', $jobfinder->id) : route('jobfinder.store') }}" method="POST">
                   @csrf
                   @if(isset($jobfinder))
                       @method('PUT')
                   @endif

                   <div class="mb-4">
                       <label for="job_title" class="block text-sm font-medium text-gray-700">Job title</label>
                       <input type="text" id="job_title" name="job_title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('job_title', $jobfinder->job_title ?? '') }}" placeholder="Job title" required>
                       @error('job_title')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="notes" class="block text-sm font-medium text-gray-700">Description</label>
                       <input type="text" id="notes" name="notes" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('notes', $jobfinder->notes ?? '') }}" placeholder="Description about job title" required>
                       @error('notes')
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
                       <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                       <input type="number" id="age" name="age" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('age', $jobfinder->age ?? '') }}" placeholder="Your age" required>
                       @error('age')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                       <input type="text" id="salary" name="salary" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('salary', $jobfinder->salary ?? '') }}" placeholder="Worker's salary" required>
                       @error('salary')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                    <div class="mb-4">
                        <label for="job_type" class="block text-sm font-medium text-gray-700">Job type</label>
                        <select id="job_type" name="job_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="Full Time" {{ old('job_type', $jobfinder->job_type ?? '') === 'Full Time' ? 'selected' : '' }}>Full Time</option>
                            <option value="Part Time" {{ old('job_type', $jobfinder->job_type ?? '') === 'Part Time' ? 'selected' : '' }}>Part Time</option>
                        </select>
                    </div>


                    <div class="mb-4">
                       <label for="map_url" class="block text-sm font-medium text-gray-700">Map</label>
                       <input type="text" id="map_url" name="map_url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('map_url', $jobfinder->map_url ?? '') }}" placeholder="Map URL" required>
                       @error('map_url')
                           <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="mb-4">
                       <label for="map_url" class="block text-sm font-medium text-gray-700">Contact</label>
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
