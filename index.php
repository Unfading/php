<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\Users::findAll();

var_dump($users);

echo '<hr>';

$user = \App\Models\Users::findById(3);

var_dump($user);