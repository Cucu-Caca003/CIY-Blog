<?php

require 'functions.php';

// autoload
spl_autoload_register(function ($class) {
    // var_dump($class);

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path($class . ".php");
});

require 'router.php';
