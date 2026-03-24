<?php
class Contact extends Controller {
    public function index() {
        // TODO (PHÁT) - Contact Page: Display contact form
        $this->view('frontend/contact');
    }

    public function submit() {
        // TODO (PHÁT) - Contact Page: Process form submission (Server-side validation)
    }
}
