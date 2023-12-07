<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$product = $db->query('select * from products where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view('products/edit.view.php', [
    'heading' => 'Edit a Product',
    'errors' => [],
    'product' => $product
]);