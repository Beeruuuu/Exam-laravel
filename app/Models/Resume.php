<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model

{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'about_me',
        'hobbies',
        'education',
        'email',
        'contact_number',
    ];
}

