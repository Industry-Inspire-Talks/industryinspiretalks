<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
         'series_id',
         'title',
         'link',
         'visible',
         'created_at',
         'updated_at',
         'deleted_at'
    ];

   
}
