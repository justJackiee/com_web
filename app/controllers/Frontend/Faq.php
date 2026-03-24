<?php
class Faq extends Controller {
    public function index() {
        // TODO (KHANG) - FAQ Page: Fetch all FAQ from database
        $this->view('frontend/faq/index');
    }
}
