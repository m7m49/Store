<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$products = $db->query('select * from products')->get();

view('products/index.view.php', [
    'heading' => 'Our Products',
    'products' => $products
]);