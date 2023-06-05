<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Game Library") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5">
                          <div class="flex gap-x-4">
                            <img class="flex-none bg-gray-50" width="200px" src="{{url('images/GAMES/DOTA 2/DOTA2_Cover.jpg')}}" alt="Image">
                            <div class="min-w-0 flex-auto">
                              <p class="text-sm font-semibold leading-5 text-white">Game Title</p>
                              <p class="mt-1 truncate text-xs leading-6 text-white">Description</p>
                            </div>
                          </div>
                          <div class="hidden sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-white">Date added</p>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
