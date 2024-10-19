<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'sequence',
        'title',
        'text',
        'link',
        'pictname',
        'date',
    ];
}
