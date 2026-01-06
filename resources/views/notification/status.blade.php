<x-app-layout>
    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
              <form action="{{ isset($notification) ? route('notification.update', $notification->id) : route('notification.store') }}" method="POST">
                   @csrf
                   @if(isset($notification))
                       @method('PUT')
                   @endif

                   <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            <option value="Accepted" {{ old('status', $notification->status ?? '') == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                            <option value="Rejected" {{ old('status', $notification->status ?? '') == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>

                   <x-primary-button>
                       {{ isset($notification) ? 'Update' : 'Add' }}
                   </x-primary-button>
              </form>
            </div>
         </div>
     </div>
</x-app-layout>
