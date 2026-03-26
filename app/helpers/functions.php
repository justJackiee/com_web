<?php
/**
 * Render a component with optional data
 * 
 * @param string $name Component filename (without .php)
 * @param array $data Data to extract into the component scope
 */
function view_component($name, $data = []) {
    $file = APPROOT . '/views/components/' . $name . '.php';
    if (file_exists($file)) {
        extract($data);
        include $file;
    } else {
        echo "<!-- Component $name not found at $file -->";
    }
}

/**
 * Get the URL root for assets
 * 
 * @param string $path Path relative to the public folder
 * @return string Full URL
 */
function asset($path) {
    return URLROOT . '/' . ltrim($path, '/');
}
