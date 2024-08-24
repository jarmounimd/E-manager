<?php

spl_autoload_register(function($classname) {
    $paths = [
        '../app/models/',
        '../app/controllers/',
        '../app/core/'
    ];

    foreach ($paths as $path) {
        $filename = $path . ucfirst($classname) . '.php';
        if (file_exists($filename)) {
            require $filename;
            return;
        }
    }
});

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'App.php';
