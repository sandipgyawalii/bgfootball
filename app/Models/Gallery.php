<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Gallerycategory::class,'gallerycategories_id','id');
    }

    protected $fillable = ['gallerycategories_id' ,'url', 'title'];
}
