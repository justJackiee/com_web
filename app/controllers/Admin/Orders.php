<?php
class Orders extends Controller {
    public function index() {
        // TODO (TÂM) - Admin Manage Orders: List all customer orders
        $this->view('admin/orders/index');
    }

    public function status($id) {
        // TODO (TÂM) - Admin Manage Orders: Update order status
    }
}
