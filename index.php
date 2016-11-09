<?php
    $content = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

    require_once('content/header.php');

    if(file_exists('content/body/' . $content . '.php')) {
        require_once('content/body/' . $content . '.php');
    } else {
        require_once('content/body/404.php');
    }

    require_once('content/footer.php');
?>