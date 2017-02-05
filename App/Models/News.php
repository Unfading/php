<?php

namespace App\Models;

use App\Model;

class News
    extends Model
{

    const TABLE = 'news';
    public $title;
    public $news;
    public $author_id;

    public function __get($k)
    {
        switch ($k){
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch($k) {
            case 'author':
                return true;
                break;
            default:
                return false;
        }
    }

}