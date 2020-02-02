<?php

if ($_SERVER['REQUEST_URI'] === 'https://credicorr.com.ar/post-form' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'Hola mundo';
}

if ($_SERVER['REQUEST_URI'] === 'https://credicorr.com.ar/post-form.php' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'Hola mundo';
}