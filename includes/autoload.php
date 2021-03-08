<?php 
    function autoload($className) {
        $fileName = str_replace('\\', '/', $className) . '.php';
        $file = __DIR__ . '/../classes/' . $fileName ;
        include $file;
    }

    // echo get_include_path() ;
    // exit(0);
    spl_autoload_register('autoload');