<x-app-layout>
<div class="py-4">
                @if(!auth()->check())
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            You need to log in to access your notifications
                        </div>
                    </div>

                @elseif(auth()->user()->hasRole('Admin'))
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            You can't access notifications
                        </div>
                    </div>

                @elseif(auth()->user()->hasRole('Perusahaan'))
                    @foreach($notifications as $notification)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <b>{{ $notification->company }}</b> as <b><font color="blue"> {{ $notification->job_title }}</font></b>
                            <hr>
                            <br><b>{{ $notification->name }}</b></br>
                            {{ $notification->email }}
                            <br>{{ $notification->contact_user }}</br>
                            @if ($notification->cv)
                                <a href="{{ Storage::url($notification->cv) }}" target="_blank" class="text-blue-500 underline">
                                    Lihat CV (PDF)
                                </a>
                            @endif
                            <br>{{ $notification->status }}</br>
                            <br><x-secondary-button class="mt-2">
                                <a href="{{ route('notification.edit', $notification->id) }}">Edit</a>
                            </x-secondary-button></br>
                        </div>
                    </div>
                    <br>
                    @endforeach

                @elseif(auth()->user()->hasRole('Pekerja'))
                    @foreach($notifications as $notification)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <b>{{ $notification->company }}</b> as <b><font color="blue"> {{ $notification->job_title }}</font></b>
                            <hr>
                            <br><b>{{ $notification->name }}</b></br>
                            {{ $notification->email }}
                            <br>{{ $notification->contact_user }}</br>
                            @if ($notification->cv)
                                <a href="{{ Storage::url($notification->cv) }}" target="_blank" class="text-blue-500 underline">
                                    Lihat CV (PDF)
                                </a>
                            @endif
                            <br>{{ $notification->status }}</br>
                            <br><form action="{{ route('notification.destroy', $notification->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button class="mt-2">Delete</x-danger-button>
                            </form></br>
                        </div>
                    </div>
                    <br>
                    @endforeach
                @endif
</x-app-layout>