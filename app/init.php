<?php
// Load Config
require_once '../config/config.php';

// Autoload Core Classes
spl_autoload_register(function($className) {
    if (file_exists('../core/' . $className . '.php')) {
        require_once '../core/' . $className . '.php';
    }
});
