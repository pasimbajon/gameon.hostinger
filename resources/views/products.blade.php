<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Product List') }}
        </h2>
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-white">Wishlist</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-gray-800 rounded-md shadow-md">
                <img src="{{ url($product->img_cover) }}" alt="image" class="w-full">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                    <span class="mt-2 text-gray-500">{{ $product->price }}</span>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->game_title }}" name="game_title">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->img_cover }}"  name="img_cover">
                        <input type="text" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white bg-blue-800 text-sm rounded-none">Add To Cart</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>