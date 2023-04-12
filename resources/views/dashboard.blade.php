<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($guests as $guest)
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-4">
                      <div class="md:flex">
                        <div class="p-8">
                          <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $guest->name }}</div>
                          <p class="mt-2 text-gray-500">{{ $guest->note }}</p>
                          <a class="mt-5 block" href="{{route('guests.destroy',$guest->id)}}">Delete</a>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
