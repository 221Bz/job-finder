<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($user) ? 'Edit user' : 'Add user' }}
        </h2>
    </x-slot>

    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
              <form action="{{ isset($user) ? route('user.update', $user->id) : route('user.store') }}" method="POST">
                   @csrf
                   @if(isset($user))
                       @method('PUT')
                   @endif

                   <div class="mb-4">
                       <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                       <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $user->name ?? '') }}" required>
                   </div>

                   <div class="mb-4">
                       <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                       <input type="text" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email', $user->email ?? '') }}" required>
                   </div>

                   <div class="mb-4">
                       <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                       <input type="text" id="password" name="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('password', $user->password ?? '') }}" required>
                   </div>

                   <input type="hidden" name="role_id" value="3">

                   <button type="submit" class="btn btn-secondary mb-3">
                       {{ isset($user) ? 'Update' : 'Add' }}
                   </button>
              </form>
            </div>
         </div>
     </div>
</x-app-layout>