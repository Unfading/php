<?php

require __DIR__ . '/autoload.php';

$user = new \App\Models\Users();
$user->firstName = 'Eugene';
$user->lastName = 'Sobol';
$user->age = 29;
$user->insert();