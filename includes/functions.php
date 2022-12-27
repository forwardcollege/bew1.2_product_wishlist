<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=mysql;dbname=php_docker', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'secret' // instruction: change this to your database password
    );
}