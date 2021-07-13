<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory,
    SoftDeletes;

    protected $fillable = [
        'id',
         'category',
         'title',
         'description',
         'link',
         'image_ext',
         'visible',
         'created_at',
         'updated_at',
         'deleted_at'
    ];
}
