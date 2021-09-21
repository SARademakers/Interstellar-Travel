<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    public function solarsystem()
    {
        return $this->belongsTo(Solarsystem::class, 'solarsystem_id', 'id');
    }

} 