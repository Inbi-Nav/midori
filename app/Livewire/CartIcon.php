<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
class CartIcon extends Component {
    public int $count = 0;

    protected function cartKey(): string {
        return Auth::check()
        ? 'cart_user_' . Auth::id() : 'cart_guest';
    }

    protected $listeners = ['cart-updated' => 'updateCount'];

    public function mount() {
        $this->updateCount();
    }

    public function updateCount() {
        if (!Auth::check()) {
            $this->count = 0;
            return;
        }
        $cart = Cache::get('cart_user_' . Auth::id(), []);
        $this->count = collect($cart)->sum('quantity');
    }


    public function render() {
        return view('livewire.cart-icon');
    }
}
