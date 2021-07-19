<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspireClass extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'image_ext',
        'release_date',
        'industry_expert_id',
        'enrollment_link',
        'session_drive_link',
        'created_at',
        'updated_at',
        'deleted_at',
        'hidden_at'
    ];

    public function expert()
    {
        return $this->belongsTo(IndustryExpert::class,'industry_expert_id');
    }
}
