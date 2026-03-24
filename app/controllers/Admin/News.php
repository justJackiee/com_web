<?php
class News extends Controller {
    public function index() {
        // TODO (KHANG) - Admin Manage News: News table
        $this->view('admin/news/index');
    }

    public function add() {
        // TODO (KHANG) - Admin Manage News: Form with image upload and SEO fields
        $this->view('admin/news/add');
    }
}
