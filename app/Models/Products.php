<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'datetime',
    ];

    /* - to remove kung tama na nilagyan ko to since foreign key siya sa images table
    public function getImage() {
        return $this->hasMany(Images::class);
    }
    */
}
