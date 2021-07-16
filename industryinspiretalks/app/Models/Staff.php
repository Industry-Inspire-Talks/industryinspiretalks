<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'designation',
        'contact',
        'email',
        'dob',
        'social_links',
        'nationality',
        'address',
        'image_ext',
        'date_of_joining',
        'date_of_leaving',
        'visible',
    ];

    protected $casts = [
        'social_links' => 'object',
    ];
}
