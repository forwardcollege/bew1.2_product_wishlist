<?php

    session_start();

    // import all the required files
    require "includes/functions.php";

    // get route
    $path = $_SERVER['REQUEST_URI'];

    // remove query string
    $path = parse_url( $path, PHP_URL_PATH );

    switch( $path ) {
        // submit
        case '/wishlist/submit':
            require 'includes/wishlist/submit.php';
            break;
        default:
            require 'pages/home.php';
            break;
    }