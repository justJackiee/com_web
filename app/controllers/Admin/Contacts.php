<?php
class Contacts extends Controller {
    public function index() {
        // TODO (PHÁT) - Admin Manage Contacts: List all messages from customers
        $this->view('admin/contacts/index');
    }

    public function view_message($id) {
        // TODO (PHÁT) - Admin Manage Contacts: View message and mark as read/replied
        $this->view('admin/contacts/view');
    }
}
