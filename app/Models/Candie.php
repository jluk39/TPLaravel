<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candie extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
