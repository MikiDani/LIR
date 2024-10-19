<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'sequence',
        'pictname',
        'title',
        'text',
        'link',
    ];
}
