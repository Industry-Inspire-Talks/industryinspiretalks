<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory,
    SoftDeletes;

    protected $fillable = [
        'id',
         'title',
         'description',
         'type',
         'skills',
         'perks',
         'tenure',
         'visible',
         'created_at',
         'updated_at',
         'deleted_at'
    ];
}
