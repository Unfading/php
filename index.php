<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\Users::findAll();

var_dump($users);