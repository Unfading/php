<?php

namespace App\Models;


use App\Db;
use App\Model;

class Users extends Model
{
    const TABLE = 'users';
    public $email;
    public $name;

}