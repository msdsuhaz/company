<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = [
        'title', 'header', 'paragraph',
    ];

}
