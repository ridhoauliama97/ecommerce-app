<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Helpers\CartManagement;
use Jantinnerezo\LivewireAlert\LivewireAlert;


#[Title('Cart - ECommerce Application')]
class CartPage extends Component
{
    use LivewireAlert;

    public $cart_items = [];
    public $grand_total;
    public $tax_amount;

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->tax_amount = ($this->grand_total * 11 / 100);
    }

    public function removeItem($product_id)
    {
        $this->cart_items = CartManagement::removeCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->tax_amount = ($this->grand_total * 11 / 100);
        $this->dispatch('update-cart-count', total_count: count($this->cart_items));
        $this->alert('success', 'Product removed from cart successfully!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function increaseQty($product_id)
    {
        $this->cart_items = CartManagement::incrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->tax_amount = ($this->grand_total * 11 / 100);
    }

    public function decreaseQty($product_id)
    {
        $this->cart_items = CartManagement::decrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->tax_amount = ($this->grand_total * 11 / 100);
    }

    public function render()
    {
        return view('livewire.cart-page');
    }
}
