<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\str;
use Illuminate\Contracts\Session;


class Menu extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'parent_id',
        'description',
        'content',
        // 'slug',
        'active',
    ];
}
