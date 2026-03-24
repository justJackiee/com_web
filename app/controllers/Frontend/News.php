<?php
class News extends Controller {
    public function index() {
        // TODO (KHANG) - News Listing: Get all articles with search and pagination
        $this->view('frontend/news/index');
    }

    public function read($id) {
        // TODO (KHANG) - News Detail: Get article by ID and its comments
        $this->view('frontend/news/read');
    }
}
