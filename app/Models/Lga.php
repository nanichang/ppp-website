<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    /**
     * Get the LGA Data associated with the LGA.
     */
    public function lga_data()
    {
        return $this->hasOne(LgaData::class);
    }
}
