<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class Cart extends Component {
    public array $items = [];

    protected function cartKey(): string {
        return 'cart_user_' . Auth::id();
    }

    public function mount() {
         if (!Auth::check()) return;
        $this->items = Cache::get($this->cartKey(), []);
    }

    #[On('add-to-cart')]
    public function add(int $productId) {
        if (!Auth::check()) return;
        $this->items = Cache::get($this->cartKey(), []);
        $product = Product::findOrFail($productId);

        if ($product->stock <= 0) return;

        if (isset($this->items[$productId])) {
        $this->items[$productId]['quantity']++;
        } else {
        $this->items[$productId] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image_url,
            'quantity' => 1,];
        }   

        Cache::forever($this->cartKey(), $this->items);
        $this->dispatch('cart-updated');
    }

    public function render() {
        return view('livewire.cart');
    }
}
