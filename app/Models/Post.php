<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //campos permitidos en asignacion masiba 
    protected $follable =[
        'title',
        'body'
    ];
}
