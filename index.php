<?php

$path = isset($_GET['path']) ? $_GET['path'] : 'home';

if ($path == '/home') {
    include('home.php');
} elseif ($path == '/about') {
    include('about.php');
} elseif ($path == '/chapters') {
    include('chapters.php');
} else echo "404 error php not found !";

?>

