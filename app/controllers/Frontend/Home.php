<?php
class Home extends Controller {
    public function index() {
        // TODO (PHÁT) - Homepage: Load featured books and banners
        $data = [
            'title' => 'Welcome to BookStore',
            'description' => 'A custom built PHP MVC book selling website.'
        ];

        $this->view_layout('frontend/index', 'frontend', $data);
    }
}
