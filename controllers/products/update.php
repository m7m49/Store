<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
   
$note = $db->query('select * from products where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

$errors = [];

if (!Validator::string($_POST['name'], 1, 1000)) {
    $errors['name'] = 'The product name should not be more than 1000 characters.';
} 

if (!empty($errors)) {
    return view('products/edit.view.php', [
        'heading' => 'Edit a Product',
        'errors' => $errors,
        'product' => $product
    ]);
}

$db->query('update products set name = :name, price = :price, imgUrl = :imgUrl, alt = :alt where id = :id', [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'imgUrl' => $_POST['imgUrl'],
    'alt' => $_POST['alt'],
]);

redirect('/products');