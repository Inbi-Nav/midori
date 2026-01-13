<h1>TIENDA</h1>

@foreach ($products as $product)
    <p>{{ $product->name }}</p>
@endforeach
