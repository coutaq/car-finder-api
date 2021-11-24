<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        "desc",
        "price"
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
