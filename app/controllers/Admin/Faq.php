<?php
class Faq extends Controller {
    public function index() {
        // TODO (KHANG) - Admin Manage FAQ: List all FAQ entries
        $this->view('admin/faq/index');
    }

    public function add() {
        // TODO (KHANG) - Admin Manage FAQ: Manage Q&A
        $this->view('admin/faq/add');
    }
}
