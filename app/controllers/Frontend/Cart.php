<?php
class Cart extends Controller {
    public function index() {
        // TODO (TÂM) - Cart: Review cart items
        $this->view('frontend/cart/index');
    }

    public function add($id) {
        // TODO (TÂM) - Cart: Add item logic
    }

    public function checkout() {
        // TODO (TÂM) - Checkout: Review order and submit
        $this->view('frontend/cart/checkout');
    }
}
