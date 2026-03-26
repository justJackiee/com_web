<?php
/**
 * Base Controller
 * Loads Models and Views
 */
class Controller {
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        if (file_exists(APPROOT . '/views/' . $view . '.php')) {
            extract($data);
            require_once APPROOT . '/views/' . $view . '.php';
        } else {
            die("View $view does not exist.");
        }
    }

    /**
     * Render a view within a layout
     */
    public function view_layout($view, $layout = 'frontend', $data = []) {
        $viewFile = APPROOT . '/views/' . $view . '.php';
        $layoutFile = APPROOT . '/views/layouts/' . $layout . '.php';

        if (file_exists($viewFile)) {
            extract($data);
            
            // Capture the view content
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();

            // Load the layout
            if (file_exists($layoutFile)) {
                require_once $layoutFile;
            } else {
                echo $content; // Fallback to raw content
            }
        } else {
            die("View $view does not exist at $viewFile");
        }
    }
}
