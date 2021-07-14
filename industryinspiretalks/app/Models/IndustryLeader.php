<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndustryLeader extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
         'name',
         'position',
         'company',
         'image_ext',
         'visible',
         'created_at',
         'updated_at',
         'deleted_at'
    ];
}
