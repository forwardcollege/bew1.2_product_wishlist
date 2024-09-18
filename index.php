<?php

    session_start();


    // get route
    $path = $_SERVER['REQUEST_URI'];

    // remove query string
    $path = parse_url( $path, PHP_URL_PATH );

    switch( $path ) {
        default:
            require 'pages/home.php';
            break;
    }