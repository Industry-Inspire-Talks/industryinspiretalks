<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndustryExpert extends Model
{
    use HasFactory,
    SoftDeletes;

    protected $fillable = [
        'name',
         'image_ext',
         'designation',
         'company',
         'linked_link',
         'created_at',
         'updated_at',
         'deleted_at',
         'hidden_at'
    ];
}
