<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LgaData extends Model
{
    use HasFactory;

    public function lga() {
        return $this->belongsTo(Lga::class);
    }
}
