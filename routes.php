<?php

$router->get('/', 'products/index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/products', 'products/index.php');
$router->delete('/product', 'products/destroy.php')->only('auth'); 
$router->get('/products/create', 'products/create.php')->only('auth');
$router->get('/product/edit', 'products/edit.php')->only('auth');
$router->patch('/product', 'products/update.php')->only('auth');
$router->post('/products', 'products/store.php')->only('auth');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');
