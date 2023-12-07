<?php

use Core\Database;
use Core\Validator;
use Core\App;


$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['name'], 1, 1000)) {
    $errors['name'] = 'The product name should not be more than 1000 characters.';
} 

if (!empty($errors)) {
    return view('products/create.view.php', [
        'heading' => 'Add a Product',
        'errors' => $errors
    ]);
}

$db->query('insert into products(name, price, imgUrl, alt) values (:name, :price, :imgUrl, :alt)', [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'imgUrl' => $_POST['imgUrl'],
    'alt' => $_POST['alt'],
]);

redirect('/products');