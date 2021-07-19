<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
         'name',
         'description',
         'image_ext',
         'coming_soon',
         'visible',
         'created_at',
         'updated_at',
         'deleted_at'
    ];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
