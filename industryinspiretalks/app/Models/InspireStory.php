<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspireStory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
         'leader_id',
         'image_ext',
         'link',
         'visible',
         'created_at',
         'updated_at',
         'deleted_at'
    ];

    public function leader()
    {
        return $this->belongsTo(IndustryLeader::class);
    }
}
