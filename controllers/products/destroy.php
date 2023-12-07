<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$product = $db->query('select * from products where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


$db->query('delete from products where id = :id', [
    'id' => $_POST['id']
]);

redirect('/products');