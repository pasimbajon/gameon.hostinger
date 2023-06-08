<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('My Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    {{ __("Game Library") }}
                </div>
                <div class="p-6 text-white">
                    {{-- <ul role="list" class="divide-y divide-gray-100">
                        @foreach ($games as $item)
                        <li class="flex justify-between gap-x-6 py-5">
                          <div class="flex gap-x-4">
                            <img class="flex-none bg-gray-900" width="100px" src="{{$item->img_cover}}" alt="Image">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-5 text-white">{{$item->game_title}}</p>
                                <p class="mt-1 truncate text-xs leading-6 text-white">{{$item->game_desc}}</p>
                            </div>
                          </div>
                          <div class="hidden sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-white">Date added</p>
                          </div>
                        </li>
                        @endforeach
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
