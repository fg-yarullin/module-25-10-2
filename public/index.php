<?php
    // declare(strict_types=1);
    include __DIR__ . '/../includes/autoload.php';

    ob_start();
        include __DIR__ . '/../layouts/vichecles.layout.php';
    $output = ob_get_clean();

    include __DIR__ . '/../layouts/master.layout.php';