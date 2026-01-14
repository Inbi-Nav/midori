<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Products</h2>

                @forelse ($products as $product)
                    <div class="bg-gray-100 p-4 rounded-lg mb-4">
                        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                        <p class="text-gray-600">{{ $product->description }}</p>
                    </div>
                @empty
                    <p>No products available.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
