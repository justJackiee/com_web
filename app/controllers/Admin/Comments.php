<?php
class Comments extends Controller {
    public function index() {
        // TODO (KHANG) - Admin Manage Comments: List all comments for moderation
        $this->view('admin/comments/index');
    }

    public function delete($id) {
        // TODO (KHANG) - Admin Manage Comments: Remove inappropriate comments
    }
}
