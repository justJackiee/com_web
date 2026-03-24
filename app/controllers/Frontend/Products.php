<?php
class Products extends Controller {
    public function index() {
        // TODO (TÂM) - Product Listing: Get all books with search/filter and pagination
        $this->view('frontend/products/index');
    }

    public function detail($id) {
        // TODO (TÂM) - Product Detail: Get book by ID and show details
        $this->view('frontend/products/detail');
    }
}
