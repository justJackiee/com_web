<?php
class Products extends Controller {
    public function index() {
        // TODO (TÂM) - Admin Manage Products: Table with Search/Pagination
        $this->view('admin/products/index');
    }

    public function add() {
        // TODO (TÂM) - Admin Manage Products: Form and image upload
        $this->view('admin/products/add');
    }
}
