<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallerycategory extends Model
{
    use HasFactory;
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
