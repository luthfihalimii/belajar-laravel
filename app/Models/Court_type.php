<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court_Type extends Model
{
    public function court()
    {
        return $this->belongsTo('CourtType::class');
    }
}
