<?php

namespace App\Models;

use App\Model;

class Users extends Model
    implements HasEmail                 //èíòåğôåéñ ïî ïîëó÷åíèş ïèñüìà, íî âîçâğàùàåò âîçğàñò èç áä
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