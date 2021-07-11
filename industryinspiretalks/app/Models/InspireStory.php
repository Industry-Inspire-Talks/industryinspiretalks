<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspireStory extends Model
{
    use HasFactory;

    public function leader()
    {
        return $this->belongsTo(IndustryLeader::class);
    }
}
