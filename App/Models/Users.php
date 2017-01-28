<?php

namespace App\Models;

use App\Model;

class Users extends Model
    implements HasEmail
{
    const TABLE = 'persons';
    public $firstName;
    public $lastName;
    public $age;

    public function getEmail()
    {
        return $this->age;
    }

}