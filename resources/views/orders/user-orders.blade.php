<x-app-layout>
    <div class="max-w-5xl mx-auto px-6 py-20">

        <h1 class="text-3xl font-bold mb-8">My Orders</h1>

        @forelse($orders as $order)
            <div class="bg-white rounded-xl shadow p-6 mb-4 flex justify-between items-center">

                <div>
                    <p class="font-semibold">Order #{{ $order->id }}</p>
                    <p class="text-sm text-gray-500">
                        €{{ number_format($order->total_amount, 2) }}
                    </p>
                </div>

                <span class="px-4 py-2 rounded-full text-sm font-semibold
                    @if($order->status === 'pending') bg-yellow-100 text-yellow-700
                    @elseif($order->status === 'paid') bg-blue-100 text-blue-700
                    @elseif($order->status === 'shipped') bg-purple-100 text-purple-700
                    @elseif($order->status === 'completed') bg-green-100 text-green-700
                    @endif
                ">
                    {{ ucfirst($order->status) }}
                </span>
            </div>
        @empty
            <p class="text-gray-500">You have no orders yet.</p>
        @endforelse

    </div>
</x-app-layout>
