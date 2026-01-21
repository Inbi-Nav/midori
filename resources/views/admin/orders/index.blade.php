@extends('layouts.admin')

@section('content')
<h1 class=" zen-font text-2xl font-bold mb-6 text-green-400">
    Orders
</h1>
@foreach($orders as $order)
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-5 mb-4">
        <div class="flex justify-between items-center mb-3">
            <div>
                <p class="text-sm text-gray-400">User</p>
                <p class="font-medium">{{ $order->user->name }}</p>
            </div>

            <div class="text-right">
                <p class="text-sm text-gray-400">Total</p>
                <p class="text-green-400 font-semibold">
                    €{{ $order->total_amount }}
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.orders.status', $order) }}" class="flex items-center gap-3">
            @csrf
            @method('PATCH')
            <select name="status"
                class="bg-gray-800 border border-gray-700 rounded px-3 py-1 text-sm">
                @foreach(['Pending','Shipped','Cancelled'] as $status)
                    <option value="{{ $status }}" @selected($order->status === $status)>
                        {{ ($status) }}
                    </option>
                @endforeach
            </select>
            <button class="bg-green-600 hover:bg-green-700 transition px-4 py-1.5 rounded text-sm">
                Save
            </button>
        </form>
    </div>
@endforeach
@endsection
