<?php
class Users extends Controller {
    public function index() {
        // TODO (SHARED) - User Management: List of users for Admin
        $this->view('admin/users/index');
    }
}
